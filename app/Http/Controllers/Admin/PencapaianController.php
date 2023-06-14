<?php

namespace App\Http\Controllers\Admin;

use App\Models\Indikator;
use App\Models\SubIndikator;
use App\Models\Pencapaian;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PencapaianController extends Controller
{
    public function index()
    {
        $pencapaians = Pencapaian::all();
        return view('admin.pencapaian.index', compact('pencapaians'));
    }

    public function create()
    {
        $indikators = Indikator::all();
        $subindikators = SubIndikator::all();
        $pencapaian = Pencapaian::all();
        return view('admin.pencapaian.create', compact('indikators', 'subindikators', 'pencapaian'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'indikator_id' => 'required',
                'subindikator_id' => 'required',
                'tahun' => 'required',
                'tipe' => 'required',
                'persentase' => 'required',
            ],
            [
                'indikator_id.required' => 'Indikator tidak boleh kosong!',
                'subindikator_id.required' => 'Subindikator tidak boleh kosong!',
                'tahun.required' => 'Tahun tidak boleh kosong!',
                'tipe.required' => 'Tipe tidak boleh kosong!',
                'persentase.required' => 'Persentase tidak boleh kosong!',
            ]
        );

        $pencapaian = Pencapaian::create([
            'indikator_id' => $request->indikator_id,
            'subindikator_id' => $request->subindikator_id,
            'tahun' => $request->tahun,
            'tipe' => $request->tipe,
            'persentase' => $request->persentase,
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        $indikators = Indikator::all();
        $subindikators = Subindikator::all();
        $pencapaian = Pencapaian::where('id', $id)->firstOrFail();
        return view('admin.pencapaian.show', compact('pencapaian', 'subindikators', 'indikators'));
    }

    public function edit($id)
    {
        $indikators = Indikator::all();
        $subindikators = Subindikator::all();
        $pencapaian = Pencapaian::where('id', $id)->firstOrFail();
        return view('admin.pencapaian.edit', compact('pencapaian', 'subindikators', 'indikators'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'indikator_id' => 'required',
                'subindikator_id' => 'required',
                'tahun' => 'required',
                'tipe' => 'required',
                'persentase' => 'required',
            ],
            [
                'indikator_id.required' => 'Indikator harus diisi!',
                'subindikator_id.required' => 'Subindikator harus diisi!',
                'tahun.required' => 'Tahun harus diisi!',
                'tipe.required' => 'Tipe harus diisi!',
                'persentase.required' => 'Persentase harus diisi!',
            ]
        );

        $pencapaian = Pencapaian::where('id', $id)->update([
            'indikator_id' => $request->indikator_id,
            'subindikator_id' => $request->subindikator_id,
            'tahun' => $request->tahun,
            'tipe' => $request->tipe,
            'persentase' => $request->persentase,
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/pencapaian')->with('sukses', 'Berhasil Ubah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/pencapaian')->with('sukses', 'Berhasil Ubah Data!');
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
        }
    }
}
