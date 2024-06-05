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
        $alamats = Alamat::all();
        return view('admin.alamat.index', compact('alamats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->roles_id == 1) {
            return view('admin.alamat.create');
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
        if (auth()->user()->roles_id == 1) {
            $alamat = alamat::create([
                'nama_kelurahan' => $request->nama_kelurahan,
                'long' => $request->long,
                'lat' => $request->lat,
            ]);

            return redirect('super/alamat')->with('sukses', 'Berhasil Tambah Data!');
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
            $alamat = Alamat::where('id', $id)->firstOrFail();
            return view('admin.alamat.show', compact('alamat'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2 || auth()->user()->roles_id == 3) {
            $alamat = Alamat::where('id', $id)->firstOrFail();
            return view('admin.alamat.edit', compact('alamat'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($request, $id)
    {
        if (auth()->user()->roles_id == 1) {
            $alamat = alamat::create([
                'nama_kelurahan' => $request->nama_kelurahan,
                'long' => $request->long,
                'lat' => $request->lat,
            ]);

            return redirect('super/alamat')->with('sukses', 'Berhasil Tambah Data!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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