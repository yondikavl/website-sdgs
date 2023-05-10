<?php

namespace App\Http\Controllers\Client;

use App\Models\Pilar;
use App\Models\Indikator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $pilars = Pilar::all();
        $indikators = Indikator::all();
        return view('home', compact('indikators', 'pilars'));
    }

    public function show($id)
    {
        $pilar = Pilar::findOrFail($id);
        $indikators = Indikator::where('pilar_id', $id)->get();
        return view('client.detail-pilar', compact('pilar', 'indikators'));
    }
}
