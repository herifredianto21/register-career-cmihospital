<?php

use App\Http\Controllers\PendaftaranPerawatController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('regist-main');
});

// Route::get('/daftar', [PendaftaranPerawatController::class, 'store'])->name('regist');
// Route::resource('regist', PendaftaranPerawatController::class);
Route::post('/', [PendaftaranPerawatController::class, 'store'])->name('registrasi');
// Route::get('/', 'App\Http\Controllers\PendaftaranPerawatController@store');


