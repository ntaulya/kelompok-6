<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->select('id','name','nomor_id', 'email', 'paket_program', 'ktp_kk')->get();

        return view('Admin.main')->with('users', $users);
    }
}