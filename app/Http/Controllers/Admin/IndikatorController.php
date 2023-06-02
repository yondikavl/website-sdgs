<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pilar;
use App\Models\Indikator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    public function index()
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2) {
            $indikators = Indikator::all();
            return view('admin.indikator.index', compact('indikators'));
        }
    }

    public function create()
    {
        if (auth()->user()->roles_id == 1) {
            $pilars = Pilar::all();
            return view('admin.indikator.create', compact('pilars'));
        }
    }

    public function store(Request $request)
    {
        if (auth()->user()->roles_id == 1) {
            $request->validate(
                [
                    'pilar_id' => 'required',
                    'nama_indikator' => 'required|max:255',
                    'deskripsi_indikator' => 'required'
                ],
                [
                    'pilar_id.required' => 'Pilar tidak boleh kosong',
                    'nama_indikator.required' => 'Nama Indikator tidak boleh kosong',
                    'nama_indikator.max' => 'Nama Indikator tidak boleh lebih dari 255 karakter',
                    'deskripsi_indikator.required' => 'Deskripsi Indikator tidak boleh kosong'
                ]
            );

            $indikator = Indikator::create([
                'pilar_id' => $request->pilar_id,
                'nama_indikator' => $request->nama_indikator,
                'deskripsi_indikator' => $request->deskripsi_indikator
            ]);

            $validasi = $request->validate(
                [
                    'ikon_indikator' => 'mimes:jpg,bmp,png,svg,jpeg|max:2048'
                ],
                [
                    'ikon_indikator.mimes' => 'Ikon Indikator harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
                    'ikon_indikator.max' => 'Ikon Indikator tidak boleh lebih dari 2MB'
                ]
            );

            if ($request->hasFile('ikon_indikator')) {
                $ikon_indikator = $validasi[('ikon_indikator')];
                $indikator->ikon_indikator = time() . '_' . $ikon_indikator->getClientOriginalName();
                $indikator->update();
                $ikon_indikator->move('../public/assets/ikon/', time() . '_' . $ikon_indikator->getClientOriginalName());
            }

            return redirect('super/indikator')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2) {
            $pilars = Pilar::all();
            $indikator = Indikator::where('id', $id)->firstOrFail();
            return view('admin.indikator.show', compact('indikator', 'pilars'));
        }
    }

    public function edit($id)
    {
        if (auth()->user()->roles_id == 1) {
            $pilars = Pilar::all();
            $indikator = Indikator::where('id', $id)->firstOrFail();
            return view('admin.indikator.edit', compact('indikator', 'pilars'));
        }
    }
    
    public function update(Request $request, $id)
    {
        if (auth()->user()->roles_id == 1) {
            $request->validate(
                [
                    'pilar_id' => 'required',
                    'nama_indikator' => 'required|max:255',
                    'deskripsi_indikator' => 'required'
                ],
                [
                    'pilar_id.required' => 'Pilar tidak boleh kosong',
                    'nama_indikator.required' => 'Nama Indikator tidak boleh kosong',
                    'nama_indikator.max' => 'Nama Indikator tidak boleh lebih dari 255 karakter',
                    'deskripsi_indikator.required' => 'Deskripsi Indikator tidak boleh kosong'
                ]
            );

            $indikator = Indikator::where('id', $id)->update([
                'pilar_id' => $request->pilar_id,
                'nama_indikator' => $request->nama_indikator,
                'deskripsi_indikator' => $request->deskripsi_indikator
            ]);

            $validasi = $request->validate(
                [
                    'ikon_indikator' => 'image|mimes:png,jpg,jpeg|max:2048'
                ],
                [
                    'ikon_indikator.mimes' => 'Ikon Indikator harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
                    'ikon_indikator.max' => 'Ikon Indikator tidak boleh lebih dari 2MB'
                ]
            );

            if ($request->hasFile('ikon_indikator')) {
                $ikon_indikator = $validasi[('ikon_indikator')];
                $indikator = Indikator::where('id', $id)->firstOrFail();
                $indikator->ikon_indikator = time() . '_' . $ikon_indikator->getClientOriginalName();
                $indikator->update();
                $ikon_indikator->move('../public/assets/ikon/', time() . '_' . $ikon_indikator->getClientOriginalName());
            }

            return redirect('super/indikator')->with('sukses', 'Berhasil Ubah Data!');
        }
    }

    public function destroy($id)
    {
        if (auth()->user()->roles_id == 1) {
            $indikator = Indikator::where('id', $id)->firstOrFail();
            $indikator->delete();

            return redirect('super/indikator')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
