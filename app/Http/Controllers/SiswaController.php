<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{

    public function index()
    {
        // $data = Siswa::all();

        return view('Daftar.main');
    }

    public function create()
    {
        $model = new Siswa;
        return view('Materi.main', compact('model'));
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->nama,
            'id' => $request->no_id,
            'email' => $request->email,
            'password' => $request->sandi,
            'password_confirmation' => $request->password_confirmation,
        ]);

        return redirect('/masuk')->with('success', 'Registrasi berhasil');
    }

    public function login()
    {
        return view('Masuk.main');
    }

    public function authenticate(Request $request)
    {
        // dd(Auth::attempt(['email' => $request->email, 'password' => $request->sandi]));
        
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            if (auth()->user()->is_admin == 1) {
                $request->session()->regenerate();
                return redirect()->intended('/Admin')->with('loginAdmin', 'Berhasil Login Sebagai Admin');
            } else {
                $request->session()->regenerate();
                return redirect()->intended('/Materi');
            }
        } else {
            return back()->with('loginError', 'Gagal Login Email atau Password Salah!');
        }
    }

    public function materi()
    {
        return view('Materi.main');
    }

}