@extends('layouts.main')
@section('title','Profil Saya')
@section('container')

<div class="card border border-primary mb-5" style="width: 100%;">
    <div class="card-body mb-5">
      <h5 class="card-title text-center text-primary mb-5 pb-2">Profile Saya</h5>
      <center><img class="profile-picture" src="prettier/images/profile-picture.jpg" width="150px" height="150px"></center>
      <form class="form-inline">
        <div class="form-group row mt-5">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{ auth()->user()->name }}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nomor ID Siswa</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{ auth()->user()->nomor_id }}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Paket Program</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{ Auth::user()->paket_program }}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputPassword" value="{{ auth()->user()->email }}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Kata Sandi</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" value="{{ auth()->user()->password }}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Mata Pelajaran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{ $data_ujian->mata_pelajaran }}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Ujian</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{ $data_ujian->tanggal_ujian }}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Jam Ujian</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{ $data_ujian->jam_ujian }}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Lokasi Ujian</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{ $data_ujian->lokasi_ujian }}" readonly>
          </div>
        </div>

        <div class="container text-center mt-5">
          <a href="" class="btn btn-primary">Edit Profile</a></button>
        </div>

      </form>
    </div>
</div>

@endsection