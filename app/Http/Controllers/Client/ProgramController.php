<?php

namespace App\Http\Controllers\Client;

use App\Models\pencapaian;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $pencapaians = pencapaian::all();
        return view('client.program', compact('pencapaians'));
    }

    public function index2()
    {
        $pencapaians = pencapaian::all();
        return view('client.semua-program', compact('pencapaians'));
    }

    public function show($id)
    {
        $pencapaian = pencapaian::findOrFail($id);
        return view('client.detail-pencapaian', compact('pencapaian'));
    }
}
