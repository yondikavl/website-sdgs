<?php

namespace App\Http\Controllers\Admin;

use App\Models\Indikator;
use App\Models\SubIndikator;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubIndikatorStoreRequest;
use Illuminate\Http\Request;

class SubindikatorController extends Controller
{
    public function index()
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2) {
            $subindikators = SubIndikator::all();
        } else if(auth()->user()->roles_id == 3) {
            $subindikators = SubIndikator::whereIn('indikator_id', auth()->user()->permissions)->get();
        }
        return view('admin.subindikator.index', compact('subindikators'));
    }

    public function create()
    {
        $indikators = Indikator::all();
        return view('admin.subindikator.create', compact('indikators'));
    }

    public function store(SubIndikatorStoreRequest $request)
    {
        $subindikator = SubIndikator::create([
            'indikator_id' => $request->indikator_id,
            'nama_sub' => $request->nama_sub,
            'kode_sub' => $request->kode_sub
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/subindikator')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/subindikator')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 3) {
            return redirect('opd/subindikator')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        $indikators = Indikator::all();
        $subindikator = SubIndikator::where('id', $id)->firstOrFail();
        return view('admin.subindikator.show', compact('subindikator', 'indikators'));
    }

    public function edit($id)
    {
        $indikators = Indikator::all();
        $subindikator = SubIndikator::where('id', $id)->firstOrFail();
        return view('admin.subindikator.edit', compact('subindikator', 'indikators'));
    }

    public function update(SubIndikatorStoreRequest $request, $id)
    {
        $subindikator = SubIndikator::where('id', $id)->update([
            'indikator_id' => $request->indikator_id,
            'nama_sub' => $request->nama_sub,
            'kode_sub' => $request->kode_sub
        ]);

        if (auth()->user()->roles_id == 1) {
            return redirect('super/subindikator')->with('sukses', 'Berhasil Ubah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/subindikator')->with('sukses', 'Berhasil Ubah Data!');
        } else if (auth()->user()->roles_id == 3) {
            return redirect('opd/subindikator')->with('sukses', 'Berhasil Ubah Data!');
        }
    }

    public function destroy($id)
    {
        $subindikator = SubIndikator::where('id', $id)->firstOrFail();
        $subindikator->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/subindikator')->with('sukses', 'Berhasil Hapus Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/subindikator')->with('sukses', 'Berhasil Hapus Data!');
        } else if (auth()->user()->roles_id == 3) {
            return redirect('opd/subindikator')->with('sukses', 'Berhasil Hapus Data!');
        }
    }

    public function getAllSubIndikator($id)
    {
        $subindikators = SubIndikator::where('indikator_id', $id)->get();
        return response()->json($subindikators);
    }
}
