<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Tujuan;
use App\Models\Indikator;
use App\Models\Pencapaian;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $indikators = Indikator::all()->count();
        $tujuans = Tujuan::all()->count();
        $users = User::all()->count();
        $pencapaian = Pencapaian::all()->count();
        return view('admin.dashboard', compact('indikators', 'tujuans', 'users', 'pencapaian'));
    }
}
