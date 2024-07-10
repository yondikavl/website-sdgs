<?php

namespace App\Http\Controllers\Client;

use App\Models\Pencapaian;
use App\Models\Tujuan;
use App\Models\Indikator;
use App\Models\Kecamatan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrediksiController extends Controller
{
    public function index()
    {
        $pencapaians = Pencapaian::all();
        $pencapaian = Pencapaian::with('Indikator.Tujuan')->get();
        $tujuans = $pencapaian->pluck('Indikator.Tujuan')->flatten()->unique('id')->values();
        $indikators = Indikator::all();
        return view('client.prediksi', compact('pencapaians', 'tujuans', 'indikators'));
    }

    public function getAllIndikator($id)
    {
        $indikators = Indikator::where('tujuan_id', $id)
            ->whereHas('pencapaian', function ($query) {
                $query->whereNotNull('tahun');
            })
            ->get();

        return response()->json($indikators);
    }

    public function getKecamatan(Request $request)
    {
        $indikatorId = $request->indikator_id;
        $pencapaians = Pencapaian::where('indikator_id', $indikatorId)
                                ->with('Kecamatan')
                                ->get();

        $kecamatans = $pencapaians->pluck('Kecamatan')->flatten()->unique('id')->values();

        return response()->json(['kecamatans' => $kecamatans]);
    }

    public function getPrediksiData($indikatorId, $kecamatanId)
{
    // Mengambil data pencapaian berdasarkan indikator dan kecamatan
    $pencapaians = Pencapaian::where('indikator_id', $indikatorId)
        ->whereHas('Kecamatan', function($query) use ($kecamatanId) {
            $query->where('kecamatan_id', $kecamatanId);
        })
        ->with(['Kecamatan' => function($query) use ($kecamatanId) {
            $query->where('kecamatan_id', $kecamatanId);
        }])
        ->get();

    // Mengurutkan data berdasarkan tahun dari yang paling rendah
    $pencapaians = $pencapaians->sortBy('tahun');

    // Mengelompokkan data berdasarkan tahun dan tingkatan
    $groupedData = $pencapaians->groupBy('tahun');

    // Mengambil data historis unik untuk setiap tingkatan dan tahun
    $labels = [];
    $historicalData = [];
    $tingkatans = $pencapaians->pluck('tingkatan')->unique(); // Mengambil tingkatan unik dari data

    foreach ($groupedData as $year => $data) {
        $labels[] = $year;
        foreach ($tingkatans as $tingkatan) {
            $tingkatanData = $data->where('tingkatan', $tingkatan)->first();
            $historicalData[$tingkatan][] = $tingkatanData ? $tingkatanData->persentase : 0;
        }
    }

    return response()->json([
        'labels' => $labels,
        'historicalData' => $historicalData,
        'tingkatans' => $tingkatans,
    ]);
}
    
}
