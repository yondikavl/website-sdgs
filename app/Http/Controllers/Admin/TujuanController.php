<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pilar;
use App\Models\Tujuan;
use App\Http\Controllers\Controller;
use App\Http\Requests\TujuanStoreRequest;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function index()
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2) {
            $tujuans = Tujuan::all();
        } else if(auth()->user()->roles_id == 3) {
            $tujuans = Tujuan::whereIn('id', auth()->user()->permissions)->get();
        }
        return view('admin.tujuan.index', compact('tujuans'));
    }

    public function create()
    {
        if (auth()->user()->roles_id == 1) {
            $pilars = Pilar::all();
            return view('admin.tujuan.create', compact('pilars'));
        }
    }

    public function store(TujuanStoreRequest $request)
    {
        if (auth()->user()->roles_id == 1) {
            $tujuan = Tujuan::create([
                'pilar_id' => $request->pilar_id,
                'nama_tujuan' => $request->nama_tujuan,
                'deskripsi_tujuan' => $request->deskripsi_tujuan
            ]);

            if ($request->hasFile('ikon_tujuan')) {
                $ikon_tujuan = $request->ikon_tujuan;
                $tujuan->ikon_tujuan = time() . '_' . $ikon_tujuan->getClientOriginalName();
                $tujuan->update();
                $ikon_tujuan->move('../public/assets/ikon/', time() . '_' . $ikon_tujuan->getClientOriginalName());
            }

            return redirect('super/tujuan')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2 || auth()->user()->roles_id == 3) {
            $pilars = Pilar::all();
            $tujuan = Tujuan::where('id', $id)->firstOrFail();
            return view('admin.tujuan.show', compact('tujuan', 'pilars'));
        }
    }

    public function edit($id)
    {
        if (auth()->user()->roles_id == 1) {
            $pilars = Pilar::all();
            $tujuan = Tujuan::where('id', $id)->firstOrFail();
            return view('admin.tujuan.edit', compact('tujuan', 'pilars'));
        }
    }

    public function update(tujuanStoreRequest $request, $id)
    {
        if (auth()->user()->roles_id == 1) {


            $tujuan = Tujuan::where('id', $id)->update([
                'pilar_id' => $request->pilar_id,
                'nama_tujuan' => $request->nama_tujuan,
                'deskripsi_tujuan' => $request->deskripsi_tujuan
            ]);



            if ($request->hasFile('ikon_tujuan')) {
                $ikon_tujuan = $request->ikon_tujuan;
                $tujuan = Tujuan::where('id', $id)->firstOrFail();
                $tujuan->ikon_tujuan = time() . '_' . $ikon_tujuan->getClientOriginalName();
                $tujuan->update();
                $ikon_tujuan->move('../public/assets/ikon/', time() . '_' . $ikon_tujuan->getClientOriginalName());
            }

            return redirect('super/tujuan')->with('sukses', 'Berhasil Ubah Data!');
        }
    }

    public function destroy($id)
    {
        if (auth()->user()->roles_id == 1) {
            $tujuan = Tujuan::where('id', $id)->firstOrFail();
            $tujuan->delete();

            return redirect('super/tujuan')->with('sukses', 'Berhasil Hapus Data!');
        }
    }

    // get all tujuan json
    public function getAlltujuan()
    {
        $tujuans = Tujuan::all();
        return response()->json($tujuans);
    }
}
