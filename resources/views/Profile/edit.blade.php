@extends('layouts.pengaturan')
@section('title','Profil Saya')
@section('container')

<div class="card border border-primary mb-5" style="width: 100%;">
    <div class="card-body mb-5">
      <h5 class="card-title text-center text-primary mb-5 pb-2">Profile Saya</h5>
      <center><img class="profile-picture" src="{{asset('prettier/images/profile-picture.jpg')}}" width="150px" height="150px"></center>
      <form class="form-inline" method="post" action="{{ route('edit', Auth()->id()) }}">
        @csrf
        <div class="form-group row mt-5">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nama" id="inputPassword" value="{{ auth()->user()->name }}">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nomor ID Siswa</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" name="nomor_id" id="inputPassword" value="{{ auth()->user()->nomor_id }}">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Paket Program</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" name="paket_program" value="{{ Auth::user()->paket_program }}">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputPassword" name="email" value="{{ auth()->user()->email }}">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Kata Sandi</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" name="kata_sandi" value="{{ auth()->user()->password }}">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Mata Pelajaran</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" name="mapel" value="{{ $data_ujian->mata_pelajaran ?? 'Tidak ada mata pelajaran yang diuji'}}">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Ujian</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" name="tgl" value="{{ $data_ujian->tanggal_ujian ?? 'Jadwal Ujian belum tersedia'}}">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Jam Ujian</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" name="jam" value="{{ $data_ujian->jam_ujian ?? 'Jam Ujian belum tersedia'}}">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Lokasi Ujian</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" name="lokasi" value="{{ $data_ujian->lokasi_ujian ?? 'Lokasi Ujian belum tersedia'}}">
          </div>
        </div>

        <div class="container text-center mt-5">
          <button type="submit" class="btn btn-primary">Update Profile</button>
        </div>

      </form>
    </div>
</div>

@endsection