<?php

namespace App\Http\Controllers\Admin;

use App\Models\Indikator;
use App\Http\Controllers\Controller;
use App\Http\Requests\IndikatorStoreRequest;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->roles_id == 1 || $user->roles_id == 2) {
            $indikators = Indikator::all();
        } else if ($user->roles_id == 3) {
            if ($user->permissions != null) {
                $indikators = Indikator::whereIn('tujuan_id', $user->permissions)->get();
            } else {
                $indikators = collect();
            }
        }

        return view('admin.indikator.index', compact('indikators'));
    }

    public function create()
    {
        $user = auth()->user();

        if ($user->roles_id == 1 || $user->roles_id == 2) {
            $indikators = Indikator::all();
        } else if ($user->roles_id == 3) {
            if ($user->permissions != null) {
                $indikators = Indikator::whereIn('id', $user->permissions)->get();
            } else {
                $indikators = Indikator::where('id', null)->get();
            }
        }

        return view('admin.indikator.create', compact('indikators'));
    }

    public function store(IndikatorStoreRequest $request)
    {
        $indikator = Indikator::create([
            'tujuan_id' => $request->tujuan_id,
            'kode_indikator' => $request->kode_indikator,
            'nama_indikator' => $request->nama_indikator
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
    $indikator = Indikator::where('id', $id)->firstOrFail();
    return view('admin.indikator.show', compact('indikator'));
    }


    public function edit($id)
{
    $user = auth()->user();
    $indikator = Indikator::where('id', $id)->firstOrFail();
    $indikators = Indikator::all();

    return view('admin.indikator.edit', compact('indikator', 'indikators'));
}


public function update(IndikatorStoreRequest $request, $id)
{
    $indikator = Indikator::findOrFail($id);

    $indikator->update([
        'tujuan_id' => $request->tujuan_id,
        'kode_indikator' => $request->kode_indikator,
        'nama_indikator' => $request->nama_indikator
    ]);

    if (auth()->user()->roles_id == 1) {
        return redirect('super/indikator')->with('sukses', 'Berhasil Update Data!');
    } else if (auth()->user()->roles_id == 2) {
        return redirect('admin/indikator')->with('sukses', 'Berhasil Update Data!');
    } else if (auth()->user()->roles_id == 3) {
        return redirect('opd/indikator')->with('sukses', 'Berhasil Update Data!');
    }
}


    public function destroy($id)
    {
        if (auth()->user()->roles_id == 1 || 2) {
            $indikator = Indikator::where('id', $id)->firstOrFail();
            $indikator->delete();

            return redirect('super/indikator')->with('sukses', 'Berhasil Hapus Data!');

    }
}

    public function getAllIndikator($id)
    {
        $indikators = Indikator::where('tujuan_id', $id)->get();
        return response()->json($indikators);
    }
}
