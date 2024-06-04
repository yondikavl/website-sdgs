<?php

namespace App\Http\Controllers\Client;

use App\Models\dashboard_client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardClientController extends Controller
{
    public function index()
    {
        return view('client.dashboard-client');
    }
}
