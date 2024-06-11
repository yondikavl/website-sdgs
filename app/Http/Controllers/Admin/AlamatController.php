<?php

namespace App\Http\Controllers\Admin;

use App\Models\Alamat;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Alamat::all();
        return view('admin.alamat.index', compact('maps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->roles_id == 1) {
            $maps = Alamat::all();
            return view('admin.alamat.create', compact('maps'));
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
            'provinsi' => 'required',
            'kotaorkab' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        Alamat::create([
            'provinsi' => $request->provinsi,
            'kotaorkab' => $request->kotaorkab,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude
        ]);
        return redirect('super/alamat')->with('sukses', 'Berhasil Tambah Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alamat $map)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alamat $map)
    {
        $maps = Alamat::all();
        return view('admin.alamat.edit', compact('map'), compact('maps'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alamat $map)
    {
        $request->validate([
            'provinsi' => 'required',
            'kotaorkab' => 'required',
            'latitude' => 'required',
            'longitude' => 'required'
        ]);

        Map::where('id', $map->id)
            ->update([
                'provinsi' => $request->provinsi,
                'kotaorkab' => $request->kotaorkab,
                'latitude' => $request->latitude,
                'longitude' => $request->longitude,
            ]);
            return redirect('super/alamat')->with('sukses', 'Berhasil Tambah Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alamat  $map
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->roles_id == 1) {
            $alamat = Alamat::where('id', $id)->firstOrFail();
            $alamat->delete();

            return redirect('super/alamat')->with('sukses', 'Berhasil Hapus Data!');
    }
}
}