@extends('layouts.masuk')
@section('title','Masuk Akun PKBM At-Taufiq')
@section('container')

<div class="container align-content-center px-5 pb-5 pt-4">
    <div class="row justify-content-center d-flex">
        <div class="col-5 justify-content-center align-middle">

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <!-- alert login gagal -->
            @if(session()->has('loginError'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <center>
                <h4>Silahkan Masuk!</h4>
            </center> <br>
            <div class="card">
                <div class="card-body px-5 pt-4" style="background-color: #3167AF;">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        {{-- Nomor id --}}
                        <div class="form-group mb-3 mt-3">
                            <label for="no_id" style="color: #FFFFFF;">Email</label>
                            <input type="email" required class="form-control" name="email" id="email"
                                placeholder="Masukkan Nomor ID Siswa">
                        </div>
                        {{-- sandi --}}
                        <div class="form-group mb-4">
                            <label for="sandi" style="color: #FFFFFF;">Kata Sandi</label>
                            <input type="password" required class="form-control" name="password" id="password"
                                placeholder="Kata Sandi Anda">
                        </div>
                        {{-- bawah --}}
                        <div class="form-group mb-3 text-center d-grid gap-2 col-3 mx-auto">
                            <button class="btn btn-primary" style="background-color: #F7DE06; color: #3167AF;"
                                name="submit" type="submit"><b>Masuk</b></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection