<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Balitas;
use App\Models\Bumils;
use App\Models\Kaders;
use Illuminate\Http\Request;

class BalitasController extends Controller
{
    public function index()
    {
        $balitas = Balitas::all();
        return view('admin.balita', [
            'balitas' => $balitas
        ]);
    }
}
