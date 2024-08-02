<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Tujuan;
use App\Models\Indikator;
use App\Models\Pencapaian;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $indikators = Indikator::all()->count();
        $tujuans = Tujuan::all()->count();
        $users = User::all()->count();
        $pencapaianCount = Pencapaian::all()->count();
        $unreadPencapaianCount = Pencapaian::where('is_read', false)->count();

        return view('admin.dashboard', compact('indikators', 'tujuans', 'users', 'pencapaianCount', 'unreadPencapaianCount'));
    }

    public function markAllAsRead()
    {
        Pencapaian::where('is_read', false)->update(['is_read' => true]);
        return redirect()->route('super.index')->with('success', 'All achievements marked as read.');
    }
}