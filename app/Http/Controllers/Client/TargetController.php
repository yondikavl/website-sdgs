<?php

namespace App\Http\Controllers\Client;

use App\Models\SubIndikator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function index()
    {
        $subindikators = SubIndikator::all();
        return view('client.target', compact('subindikators'));
    }
}
