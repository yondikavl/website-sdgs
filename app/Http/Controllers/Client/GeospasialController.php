<?php

namespace App\Http\Controllers\Client;

use App\Models\Pencapaian;
use App\Models\Geospasial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeospasialController extends Controller
{
    public function index()
    {
        $kecamatans = Pencapaian::with('Kecamatan')->get();
        // $kecamatans = Kecamatan::where('city_code', 1871)->get();
        return view('client.geospasial', compact('kecamatans'));
    }
}
