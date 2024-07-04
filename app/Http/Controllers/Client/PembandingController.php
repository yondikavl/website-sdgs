<?php

namespace App\Http\Controllers\Client;

use App\Models\Tujuan;
use App\Models\Indikator;
use App\Models\Pencapaian;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembandingController extends Controller
{
    public function index()
    {
        $tujuans = Tujuan::all();
        return view('client.pembanding', compact('tujuans'));
    }

    public function show($id)
{
    $tujuans = Tujuan::all();
    $tujuan = Tujuan::where('id', $id)->first();
    $indikators = Indikator::with('pencapaian')->where('tujuan_id', $id)->get();
    $pencapaians = [];

    foreach ($indikators as $indikator) {
        $pencapaian = Pencapaian::select('tahun', 'persentase')->where('indikator_id', $indikator->id)->get();
        $data = [
            $indikator->id => $pencapaian
        ];
        array_push($pencapaians, $data);
    }

    return view('client.pembanding', compact('tujuans', 'tujuan', 'indikators', 'pencapaians'));
    }

    public function getIndikators($tujuan_id)
{
    $indikators = Indikator::where('tujuan_id', $tujuan_id)->get();
    return response()->json($indikators);
}


}
