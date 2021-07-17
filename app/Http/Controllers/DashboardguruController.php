<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardguruController extends Controller
{
    public function index()
    {
        return view('v_dashboardguru');
    }
}
