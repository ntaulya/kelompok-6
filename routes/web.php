<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;

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
    return view('index');
});

Route::get('/bug', function () {
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

Route::get('/suksesdaftar', function () {
    return view('lokasi.suksesdaftar');
});

// Route::get('/masuk', function () {
//     return view('Masuk.main');
// });

Route::get('/materi', function () {
    return view('Materi.main');
});

Route::get('/materidetail', function () {
    return view('Materi.materidetail');
});

Route::get('/isimateri', function () {
    return view('Materi.isimateri');
});

Route::get('/profilku', function () {
    return view('Profile.profilku');
});

Route::get('/tugas', function () {
    return view('Tugas.tugas');
});

// Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);
Route::get('/daftar', [SiswaController::class, 'index']);
Route::post('/daftar', [SiswaController::class, 'store']);
Route::get('/siswa', [SiswaController::class]);
Route::get('/admin', [AdminController::class]);

//Login
Route::get('/masuk', [SiswaController::class, 'login']);
Route::post('/masuk', [SiswaController::class, 'authenticate'])->name('login');

//Materi
Route::get('/Materi', [SiswaController::class, 'materi']);

// Admin
Route::get('/Admin', [AdminController::class, 'index']);