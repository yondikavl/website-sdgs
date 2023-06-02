<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pilar;
use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        if (auth()->user()->roles_id == 1) {
            $request->validate(
                [
                    'nama_pilar' => 'required|max:255',
                    'deskripsi_pilar' => 'required'
                ],
                [
                    'nama_pilar.required' => 'Nama pilar tidak boleh kosong',
                    'nama_pilar.max' => 'Nama pilar tidak boleh lebih dari 255 karakter',
                    'deskripsi_pilar.required' => 'Deskripsi pilar tidak boleh kosong'
                ]
            );

            $pilar = Pilar::create([
                'nama_pilar' => $request->nama_pilar,
                'deskripsi_pilar' => $request->deskripsi_pilar
            ]);

            $validasi = $request->validate(
                [
                    'ikon_pilar' => 'mimes:jpg,bmp,png,svg,jpeg|max:2048'
                ],
                [
                    'ikon_pilar.mimes' => 'Ikon pilar harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
                    'ikon_pilar.max' => 'Ikon pilar tidak boleh lebih dari 2MB'
                ]
            );

            if ($request->hasFile('ikon_pilar')) {
                $ikon_pilar = $validasi[('ikon_pilar')];
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

    public function update(Request $request, $id)
    {
        if (auth()->user()->roles_id == 1) {
            $request->validate(
                [
                    'nama_pilar' => 'required|max:255',
                    'deskripsi_pilar' => 'required'
                ],
                [
                    'nama_pilar.required' => 'Nama pilar tidak boleh kosong',
                    'nama_pilar.max' => 'Nama pilar tidak boleh lebih dari 255 karakter',
                    'deskripsi_pilar.required' => 'Deskripsi pilar tidak boleh kosong'
                ]
            );

            $pilar = Pilar::where('id', $id)->update([
                'nama_pilar' => $request->nama_pilar,
                'deskripsi_pilar' => $request->deskripsi_pilar
            ]);

            $validasi = $request->validate(
                [
                    'ikon_pilar' => 'mimes:jpg,bmp,png,svg,jpeg|max:2048'
                ],
                [
                    'ikon_pilar.mimes' => 'Ikon pilar harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
                    'ikon_pilar.max' => 'Ikon pilar tidak boleh lebih dari 2MB'
                ]
            );

            if ($request->hasFile('ikon_pilar')) {
                $ikon_pilar = $validasi[('ikon_pilar')];
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
