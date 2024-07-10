<?php

namespace App\Http\Controllers\Admin;

use App\Models\Indikator;
use App\Models\Tujuan;
use App\Models\Pencapaian;
use App\Models\Kecamatan;
use App\Imports\PencapaianImport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class PencapaianController extends Controller
{
    public function index()
{
    if (auth()->user()->roles_id == 3) {
        // if user permission is not empty
        if(auth()->user()->permissions != null){
            // get pencapaian where indikator id is in user permission
            $pencapaians = Pencapaian::whereIn('indikator_id', auth()->user()->permissions)->get();
            
        } else {
            // get pencapaian where indikator id is null
            $pencapaians = Pencapaian::where('indikator_id', null)->get();
        }
    } else {
        $pencapaians = Pencapaian::all();
        // dd($pencapaians);
    }

    // Sort the years in descending order
    $years = $pencapaians->pluck('tahun')->unique()->sortDesc();

    return view('admin.pencapaian.index', compact('pencapaians', 'years'));
}

    public function create()
    {
        $kecamatans = Kecamatan::where('city_code', 1871)->get();
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2) {
            $tujuans = Tujuan::all();
        } else if(auth()->user()->roles_id == 3) {
            if(auth()->user()->permissions != null){
                $tujuans = Tujuan::whereIn('id', auth()->user()->permissions)->get();
            } else {
                $tujuans = Tujuan::where('id', null)->get();
            }
        }
        return view('admin.pencapaian.create', compact('tujuans', 'kecamatans'));
    }

    public function import (Request $request){
        $request->validate([
            'files.*' => 'required|mimes:xlsx,xls',
        ], [
            'files.*.required' => 'File tidak boleh kosong!',
            'files.*.mimes' => 'File harus berformat xlsx atau xls!',
        ]);

        // dd($request->all());

        $files = $request->file('files');

        foreach ($files as $file) {
            Excel::import(new PencapaianImport($request->tahun), $file);
        }
        
        // dd($files);
        if (auth()->user()->roles_id == 1) {
            return redirect('super/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 3) {
            return redirect('opd/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function store(Request $request)
{
    $request->validate(
        [
            'indikator_id' => 'required',
            'tahun' => 'required',
            'tipe' => 'required',
            'persentase' => 'required',
            'sumber_data' => 'required',
            'kecamatan_id' => 'required|array',
            'tingkatan' => 'required|max:255',
        ],
        [
            'indikator_id.required' => 'Indikator tidak boleh kosong!',
            'tahun.required' => 'Tahun tidak boleh kosong!',
            'tipe.required' => 'Tipe tidak boleh kosong!',
            'persentase.required' => 'Persentase tidak boleh kosong!',
            'sumber_data.required' => 'Sumber data tidak boleh kosong!',
            'kecamatan_id.required' => 'Kecamatan tidak boleh kosong!',
            'tingkatan.required' => 'Tingkatan tidak boleh kosong!'
        ]
    );

    $currentUser = auth()->user();

    $pencapaian = Pencapaian::create([
        'indikator_id' => $request->indikator_id,
        'tahun' => $request->tahun,
        'tipe' => $request->tipe,
        'persentase' => $request->persentase,
        'sumber_data' => $request->sumber_data,
        'tingkatan' => $request->tingkatan,
        'keterangan' => $request->keterangan,
        'user_id' => $currentUser->id, // Set the user_id to the current authenticated user's ID
    ]);

    // Attach kecamatan to pencapaian
    $pencapaian->Kecamatan()->attach($request->kecamatan_id);

    if ($currentUser->roles_id == 1) {
        return redirect('super/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
    } else if ($currentUser->roles_id == 2) {
        return redirect('admin/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
    } else if ($currentUser->roles_id == 3) {
        return redirect('opd/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
    }
}



    public function show($id)
    {
        $indikators = Indikator::all();
        $tujuans = Tujuan::all();
        $pencapaian = Pencapaian::where('id', $id)->firstOrFail();
        return view('admin.pencapaian.show', compact('pencapaian', 'tujuans', 'indikators'));
    }

    public function edit($id)
    {
        $kecamatans = Kecamatan::where('city_code', 1871)->get();
        $indikators = Indikator::all();
        $tujuans = Tujuan::all();
        $pencapaian = Pencapaian::where('id', $id)->firstOrFail();
        return view('admin.pencapaian.edit', compact('kecamatans', 'pencapaian', 'tujuans', 'indikators'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'tahun' => 'required',
        'tipe' => 'required',
        'persentase' => 'required',
        'kecamatan_id' => 'required|array',
        'kecamatan_id.required' => 'Kecamatan tidak boleh kosong!',
        'tingkatan' => 'required|max:255',
    ], [
        'tahun.required' => 'Tahun harus diisi!',
        'tipe.required' => 'Tipe harus diisi!',
        'persentase.required' => 'Persentase harus diisi!',
        'tingkatan.required' => 'Tingkatan tidak boleh kosong!'
    ]);

    // Update the Pencapaian record
    Pencapaian::where('id', $id)->update([
        'tahun' => $request->tahun,
        'tipe' => $request->tipe,
        'persentase' => $request->persentase,
        'sumber_data' => $request->sumber_data,
        'tingkatan' => $request->tingkatan
    ]);

    // Retrieve the updated Pencapaian instance
    $pencapaian = Pencapaian::find($id);

    // Attach kecamatan_id
    $pencapaian->Kecamatan()->attach($request->kecamatan_id);

    // Redirect based on user role
    if (auth()->user()->roles_id == 1) {
        return redirect('super/pencapaian')->with('sukses', 'Berhasil Ubah Data!');
    } elseif (auth()->user()->roles_id == 2) {
        return redirect('admin/pencapaian')->with('sukses', 'Berhasil Ubah Data!');
    } elseif (auth()->user()->roles_id == 3) {
        return redirect('opd/pencapaian')->with('sukses', 'Berhasil Ubah Data!');
    }
}

    public function destroy($id)
    {
        $pencapaian = Pencapaian::where('id', $id)->firstOrFail();
        $pencapaian->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/pencapaian')->with('sukses', 'Berhasil Hapus Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/pencapaian')->with('sukses', 'Berhasil Hapus Data!');
        } else if (auth()->user()->roles_id == 3) {
            return redirect('opd/pencapaian')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
