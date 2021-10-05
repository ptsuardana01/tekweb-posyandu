<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Home::class, 'index']);
Route::get('/about', [Home::class, 'about']);

//go to view dashboard
Route::get('admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');

//go to view balita
Route::get('admin/balita', function () {
    return view('admin.balita');
})->middleware(['auth'])->name('balita');

//go to view ibuHamil
Route::get('admin/ibu-hamil', function () {
    return view('admin.ibuHamil');
})->middleware(['auth'])->name('ibuHamil');

//go to view petugasPosyandu
Route::get('admin/petugas-posyandu', function () {
    return view('admin.petugasPosyandu');
})->middleware(['auth'])->name('petugasPosyandu');

//go to view statistikPosyandu
Route::get('admin/statistik-posyandu', function () {
    return view('admin.statistikPosyandu');
})->middleware(['auth'])->name('statistikPosyandu');

//go to view event
Route::get('admin/event', function () {
    return view('admin.event');
})->middleware(['auth'])->name('event');

require __DIR__.'/auth.php';
