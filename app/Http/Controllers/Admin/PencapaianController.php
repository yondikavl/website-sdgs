<?php

namespace App\Http\Controllers\Admin;

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
        $pencapaian = Pencapaian::all();
        $subindikators = SubIndikator::all();
        return view('admin.pencapaian.create', compact('subindikators', 'pencapaian'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'subindikator_id' => 'required',
                'nama_pencapaian' => 'required|max:255',
                'deskripsi_pencapaian' => 'required',
                'persentase' => 'required|numeric'
            ],
            [
                'subindikator_id.required' => 'subindikator tidak boleh kosong',
                'nama_pencapaian.required' => 'Nama pencapaian tidak boleh kosong',
                'nama_pencapaian.max' => 'Nama pencapaian tidak boleh lebih dari 255 karakter',
                'deskripsi_pencapaian.required' => 'Deskripsi pencapaian tidak boleh kosong',
                'persentase.required' => 'Persentase tidak boleh kosong',
                'persentase.numeric' => 'Persentase harus berupa angka'
            ]
        );

        $pencapaian = Pencapaian::create([
            'subindikator_id' => $request->subindikator_id,
            'nama_pencapaian' => $request->nama_pencapaian,
            'deskripsi_pencapaian' => $request->deskripsi_pencapaian,
            'persentase' => $request->persentase,
        ]);

        $validasi = $request->validate(
            [
                'ikon_pencapaian' => 'mimes:jpg,bmp,png,svg,jpeg|max:10240'
            ],
            [
                'ikon_pencapaian.mimes' => 'Ikon pencapaian harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
                'ikon_pencapaian.max' => 'Ikon pencapaian tidak boleh lebih dari 10MB'
            ]
        );

        if ($request->hasFile('ikon_pencapaian')) {
            $ikon_pencapaian = $validasi[('ikon_pencapaian')];
            $pencapaian->ikon_pencapaian = time() . '_' . $ikon_pencapaian->getClientOriginalName();
            $pencapaian->update();
            $ikon_pencapaian->move('../public/assets/img/pencapaian/', time() . '_' . $ikon_pencapaian->getClientOriginalName());
        }

        if (auth()->user()->roles_id == 1) {
            return redirect('super/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
        } else if (auth()->user()->roles_id == 2) {
            return redirect('admin/pencapaian')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        $subindikators = Subindikator::all();
        $pencapaian = Pencapaian::where('id', $id)->firstOrFail();
        return view('admin.pencapaian.show', compact('pencapaian', 'subindikators'));
    }

    public function edit($id)
    {
        $subindikators = Subindikator::all();
        $pencapaian = Pencapaian::where('id', $id)->firstOrFail();
        return view('admin.pencapaian.edit', compact('pencapaian', 'subindikators'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'subindikator_id' => 'required',
                'nama_pencapaian' => 'required|max:255',
                'deskripsi_pencapaian' => 'required',
                'persentase' => 'required|numeric'
            ],
            [
                'subindikator_id.required' => 'subindikator tidak boleh kosong',
                'nama_pencapaian.required' => 'Nama pencapaian tidak boleh kosong',
                'nama_pencapaian.max' => 'Nama pencapaian tidak boleh lebih dari 255 karakter',
                'deskripsi_pencapaian.required' => 'Deskripsi pencapaian tidak boleh kosong',
                'persentase.required' => 'Persentase tidak boleh kosong',
                'persentase.numeric' => 'Persentase harus berupa angka'
            ]
        );

        $pencapaian = Pencapaian::where('id', $id)->update([
            'subindikator_id' => $request->subindikator_id,
            'nama_pencapaian' => $request->nama_pencapaian,
            'deskripsi_pencapaian' => $request->deskripsi_pencapaian
        ]);

        $validasi = $request->validate(
            [
                'ikon_pencapaian' => 'mimes:jpg,bmp,png,svg,jpeg|max:10240'
            ],
            [
                'ikon_pencapaian.mimes' => 'Ikon pencapaian harus berupa gambar dengan format png, jpg, jpeg, bmp, svg',
                'ikon_pencapaian.max' => 'Ikon pencapaian tidak boleh lebih dari 10MB'
            ]
        );

        if ($request->hasFile('ikon_pencapaian')) {
            $ikon_pencapaian = $validasi[('ikon_pencapaian')];
            $pencapaian = Pencapaian::where('id', $id)->firstOrFail();
            $pencapaian->ikon_pencapaian = time() . '_' . $ikon_pencapaian->getClientOriginalName();
            $pencapaian->update();
            $ikon_pencapaian->move('../public/assets/img/pencapaian/', time() . '_' . $ikon_pencapaian->getClientOriginalName());
        }

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
