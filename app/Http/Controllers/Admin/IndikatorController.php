<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tujuan;
use App\Models\indikator;
use App\Http\Controllers\Controller;
use App\Http\Requests\IndikatorStoreRequest;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    public function index()
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2) {
            $indikators = Indikator::all();
        } else if(auth()->user()->roles_id == 3) {
            if(auth()->user()->permiindikatorions != null){
                $indikators = Indikator::whereIn('tujuan_id', auth()->user()->permiindikatorions)->get();
            } else {
                $indikators = Indikator::where('tujuan_id', null)->get();
            }
        }
        return view('admin.indikator.index', compact('indikators'));
    }

    public function create()
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2) {
            $tujuans = Tujuan::all();
        } else if(auth()->user()->roles_id == 3) {
            if(auth()->user()->permiindikatorions != null){
                $tujuans = Tujuan::whereIn('id', auth()->user()->permiindikatorions)->get();
            } else {
                $tujuans = Tujuan::where('id', null)->get();
            }
        }
        return view('admin.indikator.create', compact('tujuans'));
    }

    public function store(IndikatorStoreRequest $request)
    {
        $indikator = Indikator::create([
            'tujuan_id' => $request->tujuan_id,
            'nama_indikator' => $request->nama_indikator,
            'kode_indikator' => $request->kode_indikator
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/indikator')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/indikator')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 3) {
            return redirect('opd/indikator')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        $tujuans = Tujuan::all();
        $indikator = Indikator::where('id', $id)->firstOrFail();
        return view('admin.indikator.show', compact('indikator', 'tujuans'));
    }

    public function edit($id)
    {
        $tujuans = Tujuan::all();
        $indikator = Indikator::where('id', $id)->firstOrFail();
        return view('admin.indikator.edit', compact('indikator', 'tujuans'));
    }

    public function update(indikatorStoreRequest $request, $id)
    {
        $indikator = Indikator::where('id', $id)->update([
            'tujuan_id' => $request->tujuan_id,
            'nama_indikator' => $request->nama_indikator,
            'kode_indikator' => $request->kode_indikator
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/indikator')->with('sukses', 'Berhasil Ubah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/indikator')->with('sukses', 'Berhasil Ubah Data!');
        } else if (auth()->user()->roles_id == 3) {
            return redirect('opd/indikator')->with('sukses', 'Berhasil Ubah Data!');
        }
    }

    public function destroy($id)
    {
        $indikator = Indikator::where('id', $id)->firstOrFail();
        $indikator->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/indikator')->with('sukses', 'Berhasil Hapus Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/indikator')->with('sukses', 'Berhasil Hapus Data!');
        } else if (auth()->user()->roles_id == 3) {
            return redirect('opd/indikator')->with('sukses', 'Berhasil Hapus Data!');
        }
    }

    public function getAllindikator($id)
    {
        $indikators = Indikator::where('tujuan_id', $id)->get();
        return response()->json($indikators);
    }
}
