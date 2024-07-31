<?php

namespace App\Http\Controllers\Admin;

use App\Models\Indikator;
use App\Models\Tujuan;
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
            $tujuans = Tujuan::all();
        } else if ($user->roles_id == 3) {
            if ($user->permissions != null) {
                $tujuans = Tujuan::whereIn('id', $user->permissions)->get();
            } else {
                $tujuans = Tujuan::where('id', null)->get();
            }
        }

        return view('admin.indikator.create', compact('tujuans'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $indikator = Indikator::create([
            'tujuan_id' => $request->tujuan_id,
            'kode_indikator' => $request->kode_indikator,
            'nama_indikator' => $request->nama_indikator,
            'tipe' => $request->tipe,
            'deskripsi' => $request->deskripsi
        ]);

        if ($request->hasFile('rumus')) {
            $rumus = $request->rumus;
            $file_name = time() . '.' . $rumus->getClientOriginalExtension();
            $indikator->rumus = $file_name;
            $indikator->update();
            $rumus->move('../public/assets/img/', $file_name);
        }

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
    $tipes = [
        [
            'id' => '%',
        ],
        [
            'id' => 'Orang',
        ],
        [
            'id' => 'Jumlah',
        ]
    ];

    $user = auth()->user();
    $indikator = Indikator::where('id', $id)->first();
    $tujuans = Tujuan::all();

    return view('admin.indikator.edit', compact('indikator', 'tujuans', 'tipes'));
}


public function update(IndikatorStoreRequest $request, $id)
{
    $indikator = Indikator::where('id', $id)->first();
    
    if (!$indikator) {
        return redirect()->back()->with('error', 'Indikator not found!');
    }

    // Update the basic fields
    $indikator->update([
        'tujuan_id' => $request->tujuan_id,
        'kode_indikator' => $request->kode_indikator,
        'nama_indikator' => $request->nama_indikator,
        'tipe' => $request->tipe,
        'deskripsi' => $request->deskripsi
    ]);

    // Update the rumus file if a new one is uploaded
    if ($request->hasFile('rumus')) {
        // Delete old file if it exists
        if ($indikator->rumus) {
            $oldFilePath = public_path('assets/img/' . $indikator->rumus);
            if (file_exists($oldFilePath)) {
                unlink($oldFilePath);
            }
        }

        // Save new file
        $rumus = $request->file('rumus');
        $fileName = time() . '.' . $rumus->getClientOriginalExtension();
        $rumus->move(public_path('assets/img/'), $fileName);

        // Update the model with the new file name
        $indikator->rumus = $fileName;
        $indikator->update();
    }

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

    public function checkIndikatorExists($kodeIndikator)
    {
        $exists = Indikator::where('kode_indikator', $kodeIndikator)->exists();
        return response()->json(['exists' => $exists]);
    }
}
