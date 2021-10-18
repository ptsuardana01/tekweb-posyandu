<?php

namespace App\Http\Controllers\AdminControllers\TambahData;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TambahDataBumil extends Controller
{
    public function index() {
        return view('admin.tambahDataBumil');
    }
}
