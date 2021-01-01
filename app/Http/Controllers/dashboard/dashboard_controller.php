<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashboard_controller extends Controller
{
    public function dashboard(){
        return view('dashboard.dashboard');
    }
}
