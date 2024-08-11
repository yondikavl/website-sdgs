<?php

namespace App\Http\Controllers\Admin;

use App\Models\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('admin.berita.index');
    }

    public function create()
    {
        return view('adminberita.create');
    }

    public function store()
    {
        return redirect('super/berita');
    }

    public function show($id)
    {
        return view('admin.berita.show');
    }

    public function edit($id)
    {
        return view('admin.berita.edit');
    }

    public function update()
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function getAllberita()
    {
        //
    }
}
