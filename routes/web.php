<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterLokasiController;

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

Route::post('/daftar-ujian', [RegisterLokasiController::class, 'store'])->name('daftar-ujian');

Route::get('/suksesdaftar', function () {
    return view('lokasi.suksesdaftar');
})->name('suksesDaftar');

Route::get('/profilku', [ProfileController::class, 'index'])->name('profile');

//tugas
Route::get('/tugas', function () {
    return view('Tugas.tugas');
});

Route::get('/kumpultugas', function () {
    return view('tugas.kumpultugas');
});



// Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa']);
Route::get('/daftar', [SiswaController::class, 'index']);
Route::post('/daftar', [SiswaController::class, 'store'])->name('daftar_store');
Route::get('/siswa', [SiswaController::class]);
Route::get('/admin', [AdminController::class]);

// Admin
Route::get('/Admin', [AdminController::class, 'index']);
Route::get('/lihatsiswa', [AdminController::class, 'lihatsiswa']);

//Login
Route::get('/masuk', [SiswaController::class, 'login']);
Route::post('/masuk', [SiswaController::class, 'authenticate'])->name('login');
Route::get('/keluar', [SiswaController::class, 'logout']);

//Materi
Route::get('/Materi', [MateriController::class, 'materi']);
Route::get('/materidetail', [MateriController::class, 'materidetail']);
Route::get('/ipa', [MateriController::class, 'ipa']);
Route::get('/ips', [MateriController::class, 'ips']);
Route::get('/indo', [MateriController::class, 'indo']);