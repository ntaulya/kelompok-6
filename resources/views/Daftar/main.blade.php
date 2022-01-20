@extends('layouts.daftar')
@section('title','Daftar Akun PKBM At-Taufiq')
@section('container')

<div class="container align-content-center px-5 pb-5 pt-4">
  <div class="row justify-content-center d-flex">
      <div class="col-5 justify-content-center align-middle">
        <center><h4>Halo, Buat Akun dulu ya!</h4></center> <br>
          <div class="card">
              <div class="card-body px-5 pt-4" style="background-color: #3167AF;">
                  <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        {{-- nama lengkap --}}
                        <div class="form-group mb-3 mt-4">
                            <label for="nama" style="color: #FFFFFF;">Nama Lengkap</label>
                            <input type="text" required class="form-control" name="nama" id="nama"
                                    placeholder="Masukkan Nama Lengkap">
                        </div>
                        {{-- Nomor id --}}
                        <div class="form-group mb-3">
                            <label for="no_id" style="color: #FFFFFF;">Nomor ID Siswa</label>
                            <input type="number" required class="form-control" name="no_id" id="no_id"
                                    placeholder="Masukkan Nomor ID Siswa">
                        </div>
                        {{-- email --}}
                        <div class="form-group mb-3">
                            <label for="e-mail" style="color: #FFFFFF;">Email</label>
                            <input type="email" required class="form-control" name="email" id="email"
                                placeholder="Masukkan Alamat E-mail">
                        </div>
                        {{-- sandi --}}
                        <div class="form-group mb-3">
                            <label for="sandi" style="color: #FFFFFF;">Kata Sandi</label>
                            <input type="password" required class="form-control" name="sandi" id="sandi"
                                    placeholder="Kata Sandi Anda">
                        </div>
                        {{-- konfirmasi sandi --}}
                        <div class="form-group mb-4">
                            <label for="konfsandi" style="color: #FFFFFF;">Konfirmasi Kata Sandi</label>
                            <input type="password" required class="form-control" name="password_confirmation" id="password_confirmation"
                                    placeholder="Konfirmasi Kata Sandi Anda">
                        </div>
                        {{-- bawah --}}
                        <div class="form-group mb-3 text-center d-grid gap-2 col-3 mx-auto">
                            <button class="btn btn-primary"  style="background-color: #F7DE06; color: #3167AF;" name="submit" type="submit"><b>Daftar</b></button>
                        </div>
                        <div class="form-group mb-2 text-center"style="color: #FFFFFF;">
                            <p class="d-inline">Anda sudah memiliki akun? </p><a href="/masuk" style="color: #F7DE06; text-decoration:none;">Masuk</a>
                        </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection