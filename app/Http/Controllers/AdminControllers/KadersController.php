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
        return view('admin.kader', [
            'kaders' => $kaders
        ]);
    }

    public function create()
    {
        $kaders = Kaders::all();
        return view('admin.kader', [
            'kaders' => $kaders
        ]);
    }

    public function store(Request $request)
    {
        $kaderData = $request->validate([
            'nama' => ['required', 'max:255'],
            'nik' => ['required', 'unique:kaders,nik', 'max:16'],
            'tmpt_lahir' => ['required', 'max:100'],
            'tgl_lahir' => ['required'],
            'alamat' => ['required', 'max:255'],
            'telp' => ['required'],
            'email' => ['required', 'max:100'],
        ]);

        Kaders::create($kaderData);
        return redirect('/petugas-posyandu');
    }


    public function show()
    {
        return view('admin.tambahDataKader');
    }




    public function destroy($id)
    {
        Kaders::destroy(Kaders::find($id)->id);
        Kaders::destroy($id);
        return back();
    }
}
