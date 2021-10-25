<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Balitas;
use App\Models\Bumils;
use App\Models\Kaders;
use Illuminate\Http\Request;

class BumilsController extends Controller
{
    public function index()
    {
        $bumils = Bumils::all();
        return view('admin.ibuHamil',[
            'bumils' => $bumils
        ]);
    }
}
