<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kecamatan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatans = Kecamatan::where('city_code', 1871)->get();
        return view('admin.kecamatan.index', compact('kecamatans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->roles_id == 1) {
            $kecamatans = Kecamatan::where('city_code', 1871)->get();
            return view('admin.kecamatan.create', compact('kecamatans'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'deskripsi' => 'required',
        ]);
    
        $kecamatan = Kecamatan::where('name', $request->name)->where('city_code', 1871)->first();
    
        if ($kecamatan) {
            // Update the existing Kecamatan's deskripsi
            $kecamatan->update([
                'deskripsi' => $request->deskripsi,
            ]);
    
            return redirect('super/kecamatan')->with('sukses', 'Deskripsi berhasil diperbarui!');
        } else {
            // Create a new Kecamatan
            Kecamatan::create([
                'code' => Str::random(7), // Generate a random 7-character code
                'name' => $request->name,
                'deskripsi' => $request->deskripsi,
                'city_code' => 1871,
            ]);
    
            return redirect('super/kecamatan')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2 || auth()->user()->roles_id == 3) {
        $kecamatan = Kecamatan::where('city_code', 1871)->findOrFail($id);
        return view('admin.kecamatan.show', compact('kecamatan'));
    }
    return redirect()->back()->with('error', 'Unauthorized access');
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    if (auth()->user()->roles_id == 1) {
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatans = Kecamatan::where('city_code', 1871)->get();
        return view('admin.kecamatan.edit', compact('kecamatan', 'kecamatans'));
    }
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'name' => 'required',
        'deskripsi' => 'required',
    ]);

    $existingKecamatan = Kecamatan::where('name', $request->name)
                                ->where('city_code', 1871)
                                ->first();

    if ($existingKecamatan && $existingKecamatan->id != $id) {
        // Update the existing Kecamatan's deskripsi
        $existingKecamatan->update([
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('super/kecamatan')->with('sukses', 'Deskripsi berhasil diperbarui!');
    } else {
        // Update the selected Kecamatan
        $kecamatan = Kecamatan::findOrFail($id);
        $kecamatan->update([
            'name' => $request->name,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect('super/kecamatan')->with('sukses', 'Berhasil Perbarui Data!');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan  $map
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->roles_id == 1) {
            $Kecamatan = Kecamatan::where('id', $id)->firstOrFail();
            $Kecamatan->delete();

            return redirect('super/kecamatan')->with('sukses', 'Berhasil Hapus Data!');
    }
}
}