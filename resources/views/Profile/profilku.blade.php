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
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="{{ auth()->user()->paket_program }}">
              <label class="form-check-label" for="exampleRadios1">
                Paket Kesetaraan A
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="{{ auth()->user()->paket_program }}">
              <label class="form-check-label" for="exampleRadios2">
                Paket Kesetaraan B
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="{{ auth()->user()->paket_program }}">
              <label class="form-check-label" for="exampleRadios3">
                Paket Kesetaraan C
              </label>
            </div>
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

        <div class="container text-center mt-5">
          <a href="" class="btn btn-primary">Edit Profile</a></button>
        </div>

      </form>
    </div>
</div>

@endsection