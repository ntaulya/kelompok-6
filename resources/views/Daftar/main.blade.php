@extends('layouts.daftar')
@section('title','Daftar Akun PKBM At-Taufiq')
@section('container')

<div class="card border border-primary mb-5" style="width: 100%;">
    <div class="card-body mb-5">
      <h4 class="card-title text-center mb-5 pb-2" style="color: #3167AF; margin-top: 25px;">Daftar Akun</h4>
      <form action="{{ route('daftar_store') }}" method="POST" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="form-group row mt-5">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="Masukkan Nama Lengkap" name="nama">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nomor ID Siswa</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="Masukkan Nomor ID Siswa" name="no_id">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Paket Program</label>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="paket_program" id="exampleRadios1" value="Paket A">
              <label class="form-check-label" for="exampleRadios1">
                Paket Kesetaraan A
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="paket_program" id="exampleRadios2" value="Paket B">
              <label class="form-check-label" for="exampleRadios2">
                Paket Kesetaraan B
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="paket_program" id="exampleRadios3" value="Paket C">
              <label class="form-check-label" for="exampleRadios3">
                Paket Kesetaraan C
              </label>
            </div>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputPassword" placeholder="Masukkan E-mail" name="email">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Kata Sandi</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword" placeholder="Masukkan Kata Sandi" name="password">
          </div>
        </div>

        <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Konfirmasi Kata Sandi</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" placeholder="Konfirmasi Kata Sandi" name="password_confirmation">
            </div>
          </div>

        <div class="form-group mt-3">
            <label for="exampleFormControlFile1" class="col-sm-2 col-form-label">KTP/KK</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="ktp_kk">
        </div>

        <div class="container text-center mt-5">
          <button type="submit" class="btn" style="background-color: #F7DE06; color: #3167AF; text-decoration: none; padding: 8px 30px 8px 30px;"><b>Daftar</b></button>
        </div>

      </form>
    </div>
</div>

@endsection