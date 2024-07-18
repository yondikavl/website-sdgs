<?php

namespace App\Http\Controllers\Client;

use App\Models\Pencapaian;
use App\Models\Indikator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GeospasialController extends Controller
{
    public function index()
    {
        $kecamatans = Pencapaian::with(['Kecamatan', 'Indikator'])->get();
        $pencapaian = Pencapaian::with('Indikator.Tujuan')->get();
        $tujuans = $pencapaian->pluck('Indikator.Tujuan')->flatten()->unique('id')->sortBy('id')->values();
        $indikators = Indikator::all();
        // dd($kecamatans);
        return view('client.geospasial', compact('indikators', 'kecamatans', 'tujuans'));
    }

    public function getTahun(Request $request)
    {
        $indikatorId = $request->indikator_id;
        $years = Pencapaian::where('indikator_id', $indikatorId)
                            ->pluck('tahun')
                            ->unique()
                            ->sortDesc()
                            ->values();
        return response()->json(['tahuns' => $years]);
    }
    
    public function getAllIndikator($id)
    {
        $indikators = Indikator::where('tujuan_id', $id)
            ->whereHas('pencapaian', function($query) {
                $query->whereNotNull('tahun');
            })
            ->get();

        return response()->json($indikators);
    }

}
