<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')) {
            return view('user.userDashboard');
        } else if(Auth::admin()->hasRole('admin')) {
            return view('admin.dashboard');
        }
    }
}
