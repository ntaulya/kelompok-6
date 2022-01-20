<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;

class MateriController extends Controller
{
    public function materi()
    {
        return view('Materi.main');
    }

    public function materidetail()
    {
        return view('Materi.materidetail');
    }

    public function isimateri()
    {
        return view('Materi.isimateri');
    }
}
