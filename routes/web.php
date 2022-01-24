<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterLokasiController;
use App\Http\Controllers\TugasController;

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

//Lokasi
Route::post('/daftar-ujian', [RegisterLokasiController::class, 'store'])->name('daftar-ujian');
Route::get('/lokasi', [RegisterLokasiController::class, 'index']);
Route::get('/taufiq', [RegisterLokasiController::class, 'taufiq']);
Route::get('/taqwa', [RegisterLokasiController::class, 'taqwa']);
Route::get('/RegLok1', [RegisterLokasiController::class, 'RegisLok1']);

// ROUTE SAKRAL, Jangan dirubah. gatau kenapa kalau dijadiin inline malah gakebaca
Route::get('/RegLok2', function () {
    return view('lokasi.RegisLok2');
});
Route::get('/suksesdaftar', function () {
    return view('lokasi.suksesdaftar');
})->name('suksesDaftar');
// End of Route Sakral.


//Profile
Route::get('/profilku', [ProfileController::class, 'index'])->name('profile');

//Tugas
Route::get('/tugas', [TugasController::class, 'index']);
Route::get('/kumpultugas', [TugasController::class, 'kumpultugas']);
Route::get('/kirimtugas', [TugasController::class, 'kirimtugas']);
Route::get('/tugaskekirim', [TugasController::class, 'tugaskekirim']);

//Daftar
Route::get('/daftar', [SiswaController::class, 'index']);
Route::post('/daftar', [SiswaController::class, 'store'])->name('daftar_store');

// Admin
Route::get('/Admin', [AdminController::class, 'index']);
Route::get('/tambahmateri', [AdminController::class, 'tambahmateri']);
Route::get('/tambahtugas', [AdminController::class, 'tambahtugas']);

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