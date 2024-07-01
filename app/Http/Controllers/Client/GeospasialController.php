<?php

namespace App\Http\Controllers\Client;

use App\Models\Pencapaian;
use App\Models\Indikator;
use App\Models\Geospasial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeospasialController extends Controller
{
    public function index()
    {
        $kecamatans = Pencapaian::with('Kecamatan')->get();
        $pencapaian = Pencapaian::with('Indikator.Tujuan')->get();
        $tujuans = $pencapaian->pluck('Indikator.Tujuan')->flatten()->unique('indikator_id')->values();
        $indikators = Indikator::all();
        return view('client.geospasial', compact('indikators', 'kecamatans', 'tujuans'));
    }

    public function getTahun(Request $request)
    {
        $indikatorId = $request->indikator_id;
        $years = Pencapaian::where('indikator_id', $indikatorId)
                        ->pluck('tahun')
                        ->unique();

        return response()->json(['tahuns' => $years]);
    }
    
    public function getAllIndikator($id)
    {
        
        $pencapaian = Pencapaian::with('Indikator')->get();
        $indikators = $pencapaian->pluck('Indikator')->flatten()->unique('indikator_id');
        
        // dd($indikators);
        return response()->json($indikators);
    }
}
