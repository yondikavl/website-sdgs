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
        if (auth()->user()->roles_id == 1 || auth()->user()->roles_id == 2) {
            $indikators = Indikator::all();
            $subindikators = SubIndikator::all();
            $totaluser = cache()->remember('totaluser', 33600, function () {
                return User::where('roles_id', 2)->count();
            });
            return view('admin.dashboard', compact('indikators', 'subindikators', 'totaluser'));
        }
    }
}
