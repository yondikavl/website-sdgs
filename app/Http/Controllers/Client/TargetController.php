<?php

namespace App\Http\Controllers\Client;

use App\Models\Aktivitas;
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

    public function show($id)
    {
        $subindikator = SubIndikator::findOrFail($id);
        $aktivitass = Aktivitas::where('subindikator_id', $id)->get();
        return view('client.detail-subindikator', compact('subindikator', 'aktivitass'));
    }
}
