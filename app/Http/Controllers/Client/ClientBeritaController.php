<?php

namespace App\Http\Controllers\Client;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ClientBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::where('waktu_berita', '<=', date('d/m/Y'))->orderByDesc('waktu_berita')->limit(10)->get();
        return view('client.berita', compact('beritas'));
    }
    public function show(string $slug)
    {
        //
        $berita = Berita::where('slug_berita', $slug)->first();
        $beritas = Berita::where('waktu_berita', '<=', date('d/m/Y'))->inRandomOrder()->limit(4)->get();
        return view('client.detail-berita', compact('berita', 'beritas'));
    }
}