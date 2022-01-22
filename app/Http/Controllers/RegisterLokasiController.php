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
}
