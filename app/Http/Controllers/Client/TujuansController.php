<?php

namespace App\Http\Controllers\Client;

use App\Models\Tujuan;
use App\Models\Indikator;
use App\Models\Pencapaian;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TujuansController extends Controller
{
    public function index()
    {
        $tujuans = Tujuan::all();
        return view('client.tujuan', compact('tujuans'));
    }

    public function show($id)
    {
        $tujuans = Tujuan::all();
        $tujuan = Tujuan::where('id', $id)->first();
        $indikators = Indikator::with(['pencapaian' => function ($query) {
            $query->whereBetween('tahun', [2018, 2030]);
        }])->where('tujuan_id', $id)->orderBy('id')->get();

        $pencapaians = [];
        foreach ($indikators as $indikator) {
            $years = [];
            foreach (range(2018, 2030) as $year) {
                $pencapaian = $indikator->pencapaian->firstWhere('tahun', $year);
                $years[$year] = $pencapaian ? "{$pencapaian->persentase} ({$indikator->tipe})" : "- ({$indikator->tipe})";
            }
            $pencapaians[$indikator->id] = $years;
        }

        return view('client.detail-tujuan', compact('tujuans', 'tujuan', 'indikators', 'pencapaians'));
    }
}
