<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pilar;
use App\Models\Indikator;
use App\Http\Controllers\Controller;
use App\Http\Requests\IndikatorStoreRequest;
use Illuminate\Http\Request;

class IndikatorController extends Controller
{
    public function index()
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2) {
            $indikators = Indikator::all();
        } else if(auth()->user()->roles_id == 3) {
            $indikators = Indikator::whereIn('id', auth()->user()->permissions)->get();
        }
        return view('admin.indikator.index', compact('indikators'));
    }

    public function create()
    {
        if (auth()->user()->roles_id == 1) {
            $pilars = Pilar::all();
            return view('admin.indikator.create', compact('pilars'));
        }
    }

    public function store(IndikatorStoreRequest $request)
    {
        if (auth()->user()->roles_id == 1) {
            $indikator = Indikator::create([
                'pilar_id' => $request->pilar_id,
                'nama_indikator' => $request->nama_indikator,
                'deskripsi_indikator' => $request->deskripsi_indikator
            ]);

            if ($request->hasFile('ikon_indikator')) {
                $ikon_indikator = $request->ikon_indikator;
                $indikator->ikon_indikator = time() . '_' . $ikon_indikator->getClientOriginalName();
                $indikator->update();
                $ikon_indikator->move('../public/assets/ikon/', time() . '_' . $ikon_indikator->getClientOriginalName());
            }

            return redirect('super/indikator')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    public function show($id)
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2 || auth()->user()->roles_id == 3) {
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

    public function update(IndikatorStoreRequest $request, $id)
    {
        if (auth()->user()->roles_id == 1) {


            $indikator = Indikator::where('id', $id)->update([
                'pilar_id' => $request->pilar_id,
                'nama_indikator' => $request->nama_indikator,
                'deskripsi_indikator' => $request->deskripsi_indikator
            ]);



            if ($request->hasFile('ikon_indikator')) {
                $ikon_indikator = $request->ikon_indikator;
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

    // get all indikator json
    public function getAllIndikator()
    {
        $indikators = Indikator::all();
        return response()->json($indikators);
    }
}
