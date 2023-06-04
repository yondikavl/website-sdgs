<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pilar;
use App\Http\Controllers\Controller;
use App\Http\Requests\PilarStoreRequest;
use Illuminate\Http\Request;

class PilarController extends Controller
{
    public function index()
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2 || auth()->user()->roles_id == 3) {
            $pilars = Pilar::all();
            return view('admin.pilar.index', compact('pilars'));
        }
    }

    public function create()
    {
        if (auth()->user()->roles_id == 1) {
            return view('admin.pilar.create');
        }
    }

    public function store(PilarStoreRequest $request)
    {
        if (auth()->user()->roles_id == 1) {
            $pilar = Pilar::create([
                'nama_pilar' => $request->nama_pilar,
                'deskripsi_pilar' => $request->deskripsi_pilar
            ]);

            if ($request->hasFile('ikon_pilar')) {
                $ikon_pilar = $request->ikon_pilar;
                $pilar->ikon_pilar = time() . '_' . $ikon_pilar->getClientOriginalName();
                $pilar->update();
                $ikon_pilar->move('../public/assets/ikon/', time() . '_' . $ikon_pilar->getClientOriginalName());
            }

            return redirect('super/pilar')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2 || auth()->user()->roles_id == 3) {
            $pilar = Pilar::where('id', $id)->firstOrFail();
            return view('admin.pilar.show', compact('pilar'));
        }
    }

    public function edit($id)
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2 || auth()->user()->roles_id == 3) {
            $pilar = Pilar::where('id', $id)->firstOrFail();
            return view('admin.pilar.edit', compact('pilar'));
        }
    }

    public function update(PilarStoreRequest $request, $id)
    {
        if (auth()->user()->roles_id == 1) {
            $pilar = Pilar::where('id', $id)->update([
                'nama_pilar' => $request->nama_pilar,
                'deskripsi_pilar' => $request->deskripsi_pilar
            ]);

            if ($request->hasFile('ikon_pilar')) {
                $ikon_pilar = $request->ikon_pilar;
                $pilar = Pilar::where('id', $id)->firstOrFail();
                $pilar->ikon_pilar = time() . '_' . $ikon_pilar->getClientOriginalName();
                $pilar->update();
                $ikon_pilar->move('../public/assets/ikon/', time() . '_' . $ikon_pilar->getClientOriginalName());
            }

            return redirect('super/pilar')->with('sukses', 'Berhasil Ubah Data!');
        }
    }

    public function destroy($id)
    {
        if (auth()->user()->roles_id == 1) {
            $pilar = Pilar::where('id', $id)->firstOrFail();
            $pilar->delete();

            return redirect('super/pilar')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
