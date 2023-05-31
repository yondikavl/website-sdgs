<?php

namespace App\Http\Controllers\Client;

use App\Models\SubIndikator;
use App\Models\Indikator;
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
        $subindikators = SubIndikator::where('indikator_id', $id)->get();
        return view('client.detail-indikator', compact('indikators', 'indikator', 'subindikators'));
    }
}
