<?php

namespace App\Http\Controllers\Client;

use App\Models\Aktivitas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        $aktivitass = Aktivitas::all();
        return view('client.program', compact('aktivitass'));
    }

    public function show($id)
    {
        $aktivitas = Aktivitas::findOrFail($id);
        return view('client.detail-aktivitas', compact('aktivitas'));
    }
}
