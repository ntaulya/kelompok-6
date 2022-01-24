<?php

namespace App\Http\Controllers;

use App\Models\DataUjian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterLokasiController extends Controller
{
    public function store(Request $request)
    {
        // dd($request);
        $validation = $request->validate([
            'mata_pelajaran' => 'required',
            'tanggal_ujian' => 'required',
            'jam_ujian' => 'required',
            'lokasi_ujian' => 'required'
        ]);

        // dd($validation);

        Auth::user()->dataUjians()->create($validation);
        return redirect(route('suksesDaftar'));
    }

    public function index (Request $request) {
        return view('lokasi.main');
    }

    public function taufiq (Request $request) {
        return view('lokasi.taufiq');
    }

    public function taqwa (Request $request) {
        return view('lokasi.taqwa');
    }

    public function RegisLok1 (Request $request) {
        return view('lokasi.RegisLok1');
    }

    public function RegisLok2 (Request $request) {
        return view('lokasi.RegisLok2');
    }

    public function suksesDaftar (Request $request) {
        return view('lokasi.suksesdaftar');
    }
}
