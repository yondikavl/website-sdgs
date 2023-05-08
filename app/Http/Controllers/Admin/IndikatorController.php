<?php

namespace App\Http\Controllers\Admin;

use App\Models\Indikator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    public function index()
    {
        $indikators = Indikator::all();
        return view('admin.indikator.index', compact('indikators'));
    }

    public function create()
    {
        return view('admin.indikator.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_indikator' => 'required|max:255',
                'deskripsi_indikator' => 'required'
            ],
            [
                'nama_indikator.required' => 'Nama Indikator tidak boleh kosong',
                'nama_indikator.max' => 'Nama Indikator tidak boleh lebih dari 255 karakter',
                'deskripsi_indikator.required' => 'Deskripsi Indikator tidak boleh kosong'
            ]
        );

        $indikator = Indikator::create([
            'nama_indikator' => $request->nama_indikator,
            'deskripsi_indikator' => $request->deskripsi_indikator
        ]);

        $validasi = $request->validate(
            [
                'ikon_indikator' => 'image|mimes:png,jpg,jpeg|max:2048'
            ],
            [
                'ikon_indikator.image' => 'Ikon Indikator harus berupa gambar',
                'ikon_indikator.mimes' => 'Ikon Indikator harus berupa gambar dengan format png, jpg, jpeg',
                'ikon_indikator.max' => 'Ikon Indikator tidak boleh lebih dari 2MB'
            ]
        );

        if ($request->hasFile('ikon_indikator')) {
            $ikon_indikator = $validasi[('ikon_indikator')];
            $indikator->ikon_indikator = time() . '_' . $ikon_indikator->getClientOriginalName();
            $indikator->update();
            $ikon_indikator->move('../public/assets/ikon/', time() . '_' . $ikon_indikator->getClientOriginalName());
        }

        if (auth()->user()->roles_id == 1) {
            return redirect('super/indikator')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        $indikator = Indikator::where('id', $id)->firstOrFail();
        return view('admin.indikator.show', compact('indikator'));
    }

    public function edit($id)
    {
        $indikator = Indikator::where('id', $id)->firstOrFail();
        return view('admin.indikator.edit', compact('indikator'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_indikator' => 'required|max:255',
                'deskripsi_indikator' => 'required'
            ],
            [
                'nama_indikator.required' => 'Nama Indikator tidak boleh kosong',
                'nama_indikator.max' => 'Nama Indikator tidak boleh lebih dari 255 karakter',
                'deskripsi_indikator.required' => 'Deskripsi Indikator tidak boleh kosong'
            ]
        );

        $indikator = Indikator::where('id', $id)->update([
            'nama_indikator' => $request->nama_indikator,
            'deskripsi_indikator' => $request->deskripsi_indikator
        ]);

        $validasi = $request->validate(
            [
                'ikon_indikator' => 'image|mimes:png,jpg,jpeg|max:2048'
            ],
            [
                'ikon_indikator.image' => 'Ikon Indikator harus berupa gambar',
                'ikon_indikator.mimes' => 'Ikon Indikator harus berupa gambar dengan format png, jpg, jpeg',
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

        if (auth()->user()->roles_id == 1) {
            return redirect('super/indikator')->with('sukses', 'Berhasil Ubah Data!');
        }
    }

    public function destroy($id)
    {
        $indikator = Indikator::where('id', $id)->firstOrFail();
        $indikator->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/indikator')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
