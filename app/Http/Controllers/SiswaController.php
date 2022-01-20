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
        $filename = $_FILES['ktp_kk']['name'];
        $original_file_path = $_FILES['ktp_kk']['tmp_name'];
        $destination_file_path = $_SERVER['DOCUMENT_ROOT'].'/data-regist/'.$filename;
        // User::create([
        //     'name' => $request->nama,
        //     'nomor_id' => $request->no_id,
        //     'email' => $request->email,
        //     'password' => $request->password,
        //     'paket_program' => $request->paket_program,
        //     'ktp_kk' => $destination_file_path,
        //     'password_confirmation' => $request->password_confirmation,
        // ]);


        // $validatedData = $request->validate([
        //     'nama' => 'required',
        //     'nomor_id' => 'required',
        //     'email' => 'required',
        //     'password' => 'required|confirmed',
        //     'paket_program' => 'required|in:Paket A, Paket B, Paket C',
        //     'ktp_kk' => 'image|file',
        // ]);

        // echo $validatedData;

        // $validatedData['ktp_kk'] = $request->file('ktp_kk')->store('regist-document');

        // User::create($validatedData);

        // return redirect('/masuk')->with('alert', 'Registrasi berhasil');

		// $file->move($tujuan_upload,$file->getClientOriginalName());

        if(move_uploaded_file($original_file_path ,$destination_file_path)){
            echo $destination_file_path;
        } else {

        }
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
}