<?php

namespace App\Http\Controllers\Client;

use App\Models\Pencapaian;
use App\Models\Indikator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function index()
    {
        $indikators = Indikator::all();
        return view('client.target', compact('indikators'));
    }

    public function index2()
    {
        $indikators = Indikator::all();
        return view('client.semua-target', compact('indikators'));
    }

    public function show($id)
    {
        $indikator = Indikator::findOrFail($id);
        $pencapaians = Pencapaian::where('indikator_id', $id)->get();
        return view('client.detail-indikator', compact('indikator', 'pencapaians'));
    }
}
