<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubIndikator;
use App\Models\Aktivitas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    public function index()
    {
        $aktivitass = Aktivitas::all();
        return view('admin.aktivitas.index', compact('aktivitass'));
    }

    public function create()
    {
        $subindikators = SubIndikator::all();
        return view('admin.aktivitas.create', compact('subindikators'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'subindikator_id' => 'required',
                'nama_aktivitas' => 'required|max:255',
                'deskripsi_aktivitas' => 'required'
            ],
            [
                'subindikator_id.required' => 'subindikator tidak boleh kosong',
                'nama_aktivitas.required' => 'Nama aktivitas tidak boleh kosong',
                'nama_aktivitas.max' => 'Nama aktivitas tidak boleh lebih dari 255 karakter',
                'deskripsi_aktivitas.required' => 'Deskripsi aktivitas tidak boleh kosong'
            ]
        );

        $aktivitas = Aktivitas::create([
            'subindikator_id' => $request->subindikator_id,
            'nama_aktivitas' => $request->nama_aktivitas,
            'deskripsi_aktivitas' => $request->deskripsi_aktivitas
        ]);

        $validasi = $request->validate(
            [
                'ikon_aktivitas' => 'image|mimes:png,jpg,jpeg|max:2048'
            ],
            [
                'ikon_aktivitas.image' => 'Ikon aktivitas harus berupa gambar',
                'ikon_aktivitas.mimes' => 'Ikon aktivitas harus berupa gambar dengan format png, jpg, jpeg',
                'ikon_aktivitas.max' => 'Ikon aktivitas tidak boleh lebih dari 2MB'
            ]
        );

        if ($request->hasFile('ikon_aktivitas')) {
            $ikon_aktivitas = $validasi[('ikon_aktivitas')];
            $aktivitas->ikon_aktivitas = time() . '_' . $ikon_aktivitas->getClientOriginalName();
            $aktivitas->update();
            $ikon_aktivitas->move('../public/assets/ikon/', time() . '_' . $ikon_aktivitas->getClientOriginalName());
        }

        if (auth()->user()->roles_id == 1) {
            return redirect('super/aktivitas')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/aktivitas')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        $subindikators = Subindikator::all();
        $aktivitas = Aktivitas::where('id', $id)->firstOrFail();
        return view('admin.aktivitas.show', compact('aktivitas', 'subindikators'));
    }

    public function edit($id)
    {
        $subindikators = Subindikator::all();
        $aktivitas = Aktivitas::where('id', $id)->firstOrFail();
        return view('admin.aktivitas.edit', compact('aktivitas', 'subindikators'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'subindikator_id' => 'required',
                'nama_aktivitas' => 'required|max:255',
                'deskripsi_aktivitas' => 'required'
            ],
            [
                'subindikator_id.required' => 'subindikator tidak boleh kosong',
                'nama_aktivitas.required' => 'Nama aktivitas tidak boleh kosong',
                'nama_aktivitas.max' => 'Nama aktivitas tidak boleh lebih dari 255 karakter',
                'deskripsi_aktivitas.required' => 'Deskripsi aktivitas tidak boleh kosong'
            ]
        );

        $aktivitas = Aktivitas::where('id', $id)->update([
            'subindikator_id' => $request->subindikator_id,
            'nama_aktivitas' => $request->nama_aktivitas,
            'deskripsi_aktivitas' => $request->deskripsi_aktivitas
        ]);

        $validasi = $request->validate(
            [
                'ikon_aktivitas' => 'image|mimes:png,jpg,jpeg|max:2048'
            ],
            [
                'ikon_aktivitas.image' => 'Ikon aktivitas harus berupa gambar',
                'ikon_aktivitas.mimes' => 'Ikon aktivitas harus berupa gambar dengan format png, jpg, jpeg',
                'ikon_aktivitas.max' => 'Ikon aktivitas tidak boleh lebih dari 2MB'
            ]
        );

        if ($request->hasFile('ikon_aktivitas')) {
            $ikon_aktivitas = $validasi[('ikon_aktivitas')];
            $aktivitas = Aktivitas::where('id', $id)->firstOrFail();
            $aktivitas->ikon_aktivitas = time() . '_' . $ikon_aktivitas->getClientOriginalName();
            $aktivitas->update();
            $ikon_aktivitas->move('../public/assets/ikon/', time() . '_' . $ikon_aktivitas->getClientOriginalName());
        }

        if (auth()->user()->roles_id == 1) {
            return redirect('super/aktivitas')->with('sukses', 'Berhasil Ubah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/aktivitas')->with('sukses', 'Berhasil Ubah Data!');
        }
    }

    public function destroy($id)
    {
        $aktivitas = Aktivitas::where('id', $id)->firstOrFail();
        $aktivitas->delete();

        if (auth()->user()->roles_id == 1) {
            return redirect('super/aktivitas')->with('sukses', 'Berhasil Hapus Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/aktivitas')->with('sukses', 'Berhasil Hapus Data!');
        }
    }
}
