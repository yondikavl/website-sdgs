<?php

namespace App\Http\Controllers\Client;

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
        $indikator = Indikator::where('id', $id)->firstOrFail();
        return view('client.detail-indikator', compact('indikator'));
    }
}
