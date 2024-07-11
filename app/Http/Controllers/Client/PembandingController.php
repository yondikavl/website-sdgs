<?php

namespace App\Http\Controllers\Client;

use App\Models\Pencapaian;
use App\Models\Tujuan;
use App\Models\Indikator;
use App\Models\Kecamatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembandingController extends Controller
{
    public function index()
    {
        $pencapaian = Pencapaian::with('Indikator.Tujuan')->get();
        $tujuans = $pencapaian->pluck('Indikator.Tujuan')->flatten()->unique('id')->values();
        $tahuns = Pencapaian::all()->pluck('tahun')->unique()->sort()->values();
        return view('client.pembanding', compact('tujuans', 'tahuns'));
    }

    public function getIndikators($tujuanId)
    {
        $indikators = Indikator::where('tujuan_id', $tujuanId)->get();
        return response()->json($indikators);
    }

    public function getPencapaian($tujuanId, $kecamatanId)
    {
        $pencapaians = Pencapaian::whereHas('Kecamatan', function($query) use ($kecamatanId) {
            $query->where('kecamatan.id', $kecamatanId);
        })->whereHas('Indikator', function($query) use ($tujuanId) {
            $query->where('indikator.tujuan_id', $tujuanId);
        })->with('Indikator')->get();

        // Transform data
        $data = [];
        foreach ($pencapaians as $pencapaian) {
            $indikatorName = $pencapaian->Indikator->nama_indikator;
            $tahun = $pencapaian->tahun;
            $persentase = $pencapaian->persentase;

            if (!isset($data[$indikatorName])) {
                $data[$indikatorName] = [];
            }
            $data[$indikatorName][$tahun] = $persentase;
        }

        return response()->json($data);
    }

    public function getKecamatans()
    {
        $pencapaians = Pencapaian::with('Kecamatan')->get();
        $kecamatans = $pencapaians->pluck('Kecamatan')->flatten()->unique('id')->values();
        return response()->json($kecamatans);
    }

}
