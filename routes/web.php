<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use GuzzleHttp\Middleware;

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

//go to view dashboard
// Route::get('dashboard', function () {
//     return view('admin.dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/user/dashboard', function () {
//     return view('layouts.user-dashboard');
// })->name('user-dashboard');

// Route::group(['middleware' => ['auth']], function(){
//     Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
// });

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::get('/balita', 'App\Http\Controllers\AdminControllers\BalitasController@index')->name('balita');
    Route::get('/ibu-hamil', 'App\Http\Controllers\AdminControllers\BumilsController@index')->name('ibuHamil');
    Route::get('/petugas-posyandu', 'App\Http\Controllers\AdminControllers\KadersController@index')->name('kader');
});

//go to view statistikPosyandu
Route::get('statistik-posyandu', function () {
    return view('admin.statistikPosyandu');
})->middleware(['auth'])->name('statistikPosyandu');

//go to view event
Route::get('event', function () {
    return view('admin.event');
})->middleware(['auth'])->name('event');

//go to tambah data
Route::group(['middleware' => ['auth']], function(){
    Route::get('/tambah-data-balita', 'App\Http\Controllers\AdminControllers\TambahData\TambahDataBalita@index')->name('tambahDataBalita');
    Route::get('/tambah-data-bumil', 'App\Http\Controllers\AdminControllers\TambahData\TambahDataBumil@index')->name('tambahDataBumil');
    Route::get('/tambah-data-kader', 'App\Http\Controllers\AdminControllers\TambahData\TambahDataKader@index')->name('tambahDataKader');
});







require __DIR__.'/auth.php';
