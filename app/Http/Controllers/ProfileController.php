<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $data_ujian = Auth()->user()->dataUjians()->orderByDesc('id')->first();
        return view('Profile.profilku', compact('data_ujian'));
    }
}
