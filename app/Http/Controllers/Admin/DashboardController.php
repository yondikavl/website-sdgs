<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Indikator;
use App\Models\SubIndikator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $indikators = Indikator::all();
        $subindikators = SubIndikator::all();
        $users = User::all();
        return view('admin.dashboard', compact('indikators', 'subindikators', 'users'));
    }
}
