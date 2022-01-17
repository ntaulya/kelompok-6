@extends('layouts.main')
@section('title','Profil Saya')
@section('container')

<div class="card border border-primary mb-5" style="width: 100%;">
    <div class="card-body mb-5">
      <h5 class="card-title text-center text-primary mb-5 pb-2">Profile Saya</h5>
      <center><img class="profile-picture" src="prettier/images/profile-picture.jpg" width="150px" height="150px"></center>
      <form action='{{ route('edit') }}' method='post' class="form-inline">
        @csrf
        <div class="form-group row mt-5">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input name="nama" type="text" class="form-control" id="inputPassword" placeholder="Neta Aulya Kurnia Ningrum">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nomor ID Siswa</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" placeholder="1202190010" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Paket Program</label>
          <div class="col-sm-10">
            <div class="form-check">
              <input name="id_paket" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1">
              <label class="form-check-label" for="exampleRadios1">
                Paket Kesetaraan A
              </label>
            </div>
            <div class="form-check">
              <input name="id_paket" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2">
              <label class="form-check-label" for="exampleRadios2">
                Paket Kesetaraan B
              </label>
            </div>
            <div class="form-check">
              <input name="id_paket" class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="3">
              <label class="form-check-label" for="exampleRadios3">
                Paket Kesetaraan C
              </label>
            </div>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Username</label>
          <div class="col-sm-10">
            <input name="username" type="text" class="form-control" id="inputPassword" placeholder="netaaulya">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">E-mail</label>
          <div class="col-sm-10">
            <input name="email" type="email" class="form-control" id="inputPassword" placeholder="netaaulya@gmail.com">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Kata Sandi</label>
          <div class="col-sm-10">
            <input name="password" type="password" class="form-control" id="inputPassword" placeholder="neta1233.">
          </div>
        </div>

        <div class="container text-center mt-5">
          <a href="" class="btn btn-primary">Edit Profile</a></button>
        </div>

      </form>
    </div>
</div>

@endsection