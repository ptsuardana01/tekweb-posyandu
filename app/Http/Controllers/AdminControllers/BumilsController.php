<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use App\Models\Balitas;
use App\Models\Bumils;
use App\Models\Kaders;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class BumilsController extends Controller
{
    public function index()
    {
        $bumils = Bumils::all();
        return view('admin.ibuHamil',[
            'bumils' => $bumils
        ]);
    }


    public function create()
    {
        $bumil = Bumils::all();
        return view('admin.ibuHamil', [
            'bumil' => $bumil
        ]);
    }


    public function store(Request $request)
    {
        $dataBumil = $request->validate([
            'nama' => ['required', 'max:255'],
            'nik' => ['required', 'unique:bumils,nik', 'max:16'],
            'tmpt_lahir' => ['required', 'max:100'],
            'tgl_lahir' => ['required'],
            'alamat' => ['required', 'max:255'],
            'telp' => ['required'],
            'email' => ['required', 'max:100'],
            'tb' => ['required'],
            'bb' => ['required'],
            'lila' => ['required'],
            'kader_id_bumil' => ['required'],
        ]);

        Bumils::create($dataBumil);
        return redirect('//ibu-hamil');
    }


    public function show() {
        return view('admin.tambahDataBumil');
    }


    public function destroy($id)
    {
        Bumils::destroy(Bumils::find($id)->id);
        Bumils::destroy($id);
        return back();
    }
}
