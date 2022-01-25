<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $data_ujian = Auth()->user()->dataUjians()->orderByDesc('id')->first();
        return view('Profile.profilku', compact('data_ujian'));
    }

    public function show(Request $request, $id){
        $profil = User::find($id);
        return view('profile.edit');
    }

    public function update(Request $request, $id){
        $profil = User::find($id);
        $profil->name = $request->nama;
        $profil->nomor_id = $request->nomor_id;
        $profil->email = $request->email;
        $profil->password =$request->kata_sandi;
        $profil->paket_program =$request->paket;
        $profil->ktp = 
        $profil->save();

        return redirect()->route('profile');
    }
}
