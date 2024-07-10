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
        try {
            $pencapaians = Pencapaian::all();

            \Log::info('Pencapaians retrieved: ' . $pencapaians->count());

            if ($pencapaians->isEmpty()) {
                \Log::warning('No data found for indikatorId: ' . $indikatorId . ' and kecamatanId: ' . $kecamatanId);
                return response()->json(['error' => 'No data found'], 404);
            }

            $labels = $pencapaians->pluck('tahun')->toArray();
            $historicalData1 = $pencapaians->where('tingkatan', 'SD')->pluck('persentase')->toArray();
            $historicalData2 = $pencapaians->where('tingkatan', 'SMP')->pluck('persentase')->toArray();
            $historicalData3 = $pencapaians->where('tingkatan', 'SMA')->pluck('persentase')->toArray();

            return response()->json([
                'labels' => $labels,
                'historicalData1' => $historicalData1,
                'historicalData2' => $historicalData2,
                'historicalData3' => $historicalData3,
                'pencapaians' => $pencapaians
            ]);
        } catch (\Exception $e) {
            \Log::error('Error fetching prediction data: ' . $e->getMessage());
            return response()->json(['error' => 'Error fetching prediction data'], 500);
        }
    }
}
