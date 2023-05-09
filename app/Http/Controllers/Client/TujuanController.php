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
}
