<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->select('id','name','nomor_id', 'email', 'paket_program', 'ktp_kk')->where('is_admin', '=', null)->get();

        return view('Admin.main')->with('users', $users);
    }

    public function tambahmateri(Request $request) {
        $id = $request->id;
        $user = User::FindOrFail($id);
        // return view('Admin.tambahmateri')->user;
        return view('Admin.tambahmateri' , compact('user'));
    }

    public function storetambahmateri(Request $request) {
        $filename = $_FILES['materi']['name'];
        $original_file_path = $_FILES['materi']['tmp_name'];
        
        Materi::create([
            'mata_pelajaran' => $request->mata_pelajaran,
            'jumlah_bab' => $request->jumlah_bab,
            'jumlah_subbab' => $request->jumlah_subbab,
            'materi' => $destination_file_path = $_SERVER['DOCUMENT_ROOT'].'/materi/'.$filename,
        ]);

        if(move_uploaded_file($original_file_path ,$destination_file_path)){
            return redirect('/tambahmateri')->with('alert', 'Materi berhasil ditambah');
        } else {
            echo "Materi gagal ditambah";
        }
    }

    public function tambahtugas() {
        return view('Admin.tambahtugas');
    }
}