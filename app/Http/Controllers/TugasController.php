<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function index(Request $request) {
        return view ('Tugas.tugas');
    }

    public function kumpultugas(Request $request) {
        return view ('Tugas.kumpultugas');
    }

    public function kirimtugas(Request $request) {
        return view ('Tugas.kirimtugas');
    }

    public function tugaskekirim(Request $request) {
        return view ('Tugas.tugaskekirim');
    }
}
