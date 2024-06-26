<?php

namespace App\Http\Controllers\Client;

use App\Models\Pencapaian;
use App\Models\dashboard_client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardClientController extends Controller
{
    public function index()
    {
        $kecamatans = Pencapaian::with('Kecamatan')->get();
        // $kecamatans = Kecamatan::where('city_code', 1871)->get();
        return view('client.dashboard-client', compact('kecamatans'));
    }
}
