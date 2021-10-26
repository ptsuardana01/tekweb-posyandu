<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
use App\Http\Controllers\AdminControllers\BalitasController;
use App\Http\Controllers\AdminControllers\BumilsController;
use App\Http\Controllers\AdminControllers\KadersController;
use App\Models\Balitas;
use App\Models\Bumils;
use App\Models\Kaders;
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


Route::group(['middleware' => ['auth']], function () {
    //menampilkan dashboard
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    //menampilkan balita view
    Route::get('/balita', 'App\Http\Controllers\AdminControllers\BalitasController@index')->name('balita');
    //menampilkan ibu hamil view
    Route::get('/ibu-hamil', 'App\Http\Controllers\AdminControllers\BumilsController@index')->name('ibuHamil');
    //menampilkan kader view
    Route::get('/petugas-posyandu', 'App\Http\Controllers\AdminControllers\KadersController@index')->name('kader');
});

Route::group(['middleware' => ['auth']], function () {
    //menghapus data balita
    Route::delete('/delete-balita/{id}', 'App\Http\Controllers\AdminControllers\BalitasController@destroy')->name('delete-balita');
    //menghapus data ibu hamil
    Route::delete('/delete-bumil/{id}', 'App\Http\Controllers\AdminControllers\BumilsController@destroy')->name('delete-bumil');
    //menghapus data kader
    Route::delete('/delete-kader/{id}', 'App\Http\Controllers\AdminControllers\KadersController@destroy')->name('delete-kader');
});

Route::group(['middleware' => ['auth']], function () {
    //menampilkan tambah data balita
    Route::get('/tambah-data-balita', [BalitasController::class, 'show'])->name('tambahDataBalita');
    //menampilkan tambah data ibu hamil
    Route::get('/tambah-data-bumil', [BumilsController::class, 'create'])->name('addBumils');
    Route::post('/tambah-data-bumil', [BumilsController::class, 'store'])->name('addBumils');
    Route::get('/show-data-bumil', [BumilsController::class, 'show'])->name('tambahDataBumil');
    //menampilkan tambah data kader
    Route::get('/tambah-data-kader', [KadersController::class, 'create'])->name('addKaders');
    Route::post('/tambah-data-kader', [KadersController::class, 'store'])->name('addKaders');
    Route::get('/show-data-kader', [KadersController::class, 'show'])->name('tambahDataKader');
});

//go to view statistikPosyandu
Route::get('statistik-posyandu', function () {
    return view('admin.statistikPosyandu');
})->middleware(['auth'])->name('statistikPosyandu');

//go to view event
Route::get('event', function () {
    return view('admin.event');
})->middleware(['auth'])->name('event');








require __DIR__ . '/auth.php';
