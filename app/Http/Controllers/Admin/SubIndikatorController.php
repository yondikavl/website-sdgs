<?php

namespace App\Http\Controllers\Admin;

use App\Models\Indikator;
use App\Models\Subindikator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubindikatorController extends Controller
{
    public function index()
    {
        $subindikators = SubIndikator::all();
        return view('admin.subindikator.index', compact('subindikators'));
    }

    public function create()
    {
        $indikators = Indikator::all();
        return view('admin.subindikator.create', compact('indikators'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'indikator_id' => 'required',
                'nama_sub' => 'required|max:255',
                'deskripsi_sub' => 'required'
            ],
            [
                'indikator_id.required' => 'Indikator tidak boleh kosong',
                'nama_sub.required' => 'Nama subindikator tidak boleh kosong',
                'nama_sub.max' => 'Nama subindikator tidak boleh lebih dari 255 karakter',
                'deskripsi_sub.required' => 'Deskripsi subindikator tidak boleh kosong'
            ]
        );

        $subindikator = SubIndikator::create([
            'indikator_id' => $request->indikator_id,
            'nama_sub' => $request->nama_sub,
            'deskripsi_sub' => $request->deskripsi_sub
        ]);

        $validasi = $request->validate(
            [
                'ikon_sub' => 'mimes:jpg,bmp,png,svg,jpeg|max:2048'
            ],
            [
                'ikon_sub.mimes' => 'Ikon subindikator harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
                'ikon_sub.max' => 'Ikon subindikator tidak boleh lebih dari 2MB'
            ]
        );

        if ($request->hasFile('ikon_sub')) {
            $ikon_sub = $validasi[('ikon_sub')];
            $subindikator->ikon_sub = time() . '_' . $ikon_sub->getClientOriginalName();
            $subindikator->update();
            $ikon_sub->move('../public/assets/ikon/', time() . '_' . $ikon_sub->getClientOriginalName());
        }

        if (auth()->user()->roles_id == 1) {
            return redirect('super/subindikator')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/subindikator')->with('sukses', 'Berhasil Tambah Data!');
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

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'indikator_id' => 'required',
                'nama_sub' => 'required|max:255',
                'deskripsi_sub' => 'required'
            ],
            [
                'indikator_id.required' => 'Indikator tidak boleh kosong',
                'nama_sub.required' => 'Nama subindikator tidak boleh kosong',
                'nama_sub.max' => 'Nama subindikator tidak boleh lebih dari 255 karakter',
                'deskripsi_sub.required' => 'Deskripsi subindikator tidak boleh kosong'
            ]
        );

        $subindikator = SubIndikator::where('id', $id)->update([
            'indikator_id' => $request->indikator_id,
            'nama_sub' => $request->nama_sub,
            'deskripsi_sub' => $request->deskripsi_sub
        ]);

        $validasi = $request->validate(
            [
                'ikon_sub' => 'mimes:jpg,bmp,png,svg,jpeg|max:2048'
            ],
            [
                'ikon_sub.mimes' => 'Ikon subindikator harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
                'ikon_sub.max' => 'Ikon subindikator tidak boleh lebih dari 2MB'
            ]
        );

        if ($request->hasFile('ikon_sub')) {
            $ikon_sub = $validasi[('ikon_sub')];
            $subindikator = SubIndikator::where('id', $id)->firstOrFail();
            $subindikator->ikon_sub = time() . '_' . $ikon_sub->getClientOriginalName();
            $subindikator->update();
            $ikon_sub->move('../public/assets/ikon/', time() . '_' . $ikon_sub->getClientOriginalName());
        }

        if (auth()->user()->roles_id == 1) {
            return redirect('super/subindikator')->with('sukses', 'Berhasil Ubah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/subindikator')->with('sukses', 'Berhasil Ubah Data!');
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
        }
    }
}
