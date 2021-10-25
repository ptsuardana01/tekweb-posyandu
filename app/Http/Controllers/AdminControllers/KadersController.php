<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Balitas;
use App\Models\Bumils;
use App\Models\Kaders;
use Illuminate\Http\Request;

class KadersController extends Controller
{
    public function index()
    {
        $kaders = Kaders::all();
        return view('admin.kader',[
            'kaders' => $kaders
        ]);
    }
}
