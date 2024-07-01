<?php

namespace App\Http\Controllers\Client;

use App\Models\Tujuan;
use App\Models\Indikator;
use App\Models\Pencapaian;
use App\Models\Pembanding;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembandingController extends Controller
{
    public function index()
    {
        return view('client.pembanding');
    }
}
