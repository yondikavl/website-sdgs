<?php

namespace App\Http\Controllers\Client;

use App\Models\SubIndikator;
use App\Models\Indikator;
use App\Models\Pencapaian;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TujuanController extends Controller
{
    public function index()
    {
        $indikators = Indikator::all();
        return view('client.tujuan', compact('indikators'));
    }

    public function show($id)
    {
        $indikators = Indikator::all();
        $indikator = Indikator::findOrFail($id);
        $subindikators = SubIndikator::with('pencapaian')->where('indikator_id', $id)->get();
        $pencapaians = [];

        foreach ($subindikators as $subindikator) {
            // get pencapaian berdasarkan subindikator_id tahun dan persentase
            $pencapaian = Pencapaian::select('tahun', 'persentase')->where('subindikator_id', $subindikator->id)->get();
            $data = [
                $subindikator->id => $pencapaian
            ];
            array_push($pencapaians, $data);
        }




        // return $pencapaians;

        return view('client.detail-indikator', compact('indikators', 'indikator', 'subindikators', 'pencapaians'));
    }
}
