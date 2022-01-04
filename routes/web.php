<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


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
    return view('welcome');
});

Route::get('/kalender', function () {
    return view('kalender.main');
});

Route::get('/lokasi', function () {
    return view('lokasi.main');
});

Route::get('/taufiq', function () {
    return view('lokasi.taufiq');
});

Route::get('/taqwa', function () {
    return view('lokasi.taqwa');
});

Route::get('/RegLok1', function () {
    return view('lokasi.RegisLok1');
});

Route::get('/RegLok2', function () {
    return view('lokasi.RegisLok2');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);
