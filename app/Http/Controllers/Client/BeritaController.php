<?php

namespace App\Http\Controllers\Client;

use App\Models\Berita;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        return view('client.berita');
    }

    public function index2()
    {
        return view('client.detail-berita');
    }
}
