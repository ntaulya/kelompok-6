<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Siswa::all();

        return view('Daftar.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Siswa;
        return view('Materi.main', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'name' => $request->nama,
            'id' => $request->no_id,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->sandi),
            'password_confirmation' => $request->password_confirmation,
        ]);

        return redirect('/masuk')->with('success', 'Registrasi berhasil');

        // $validatedData = $request->validate([
        //     'nama' => 'required',
        //     'no_id' => 'required',
        //     'username' => 'required',
        //     'email' => 'required',
        //     'sandi' => 'required',
        //     'password_confirmation' => 'required'
        // ]);
        
        // $validatedData['sandi'] = Hash::make($validatedData['sandi']);

        // User::create($validatedData);
        // return redirect('/masuk')->with('success', 'Registrasi berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $profil = Siswa::find($id);
        $profil->username =$request->username;
        $profil->tempat_lahir =$request->tempat_lahir;
        $profil->tanggal_lahir =$request->tanggal_lahir;
        $profil->id_paket =$request->id_paket;
        $profil->nama =$request->nama;
        $profil->save();
        
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
