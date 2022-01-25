@extends('layouts.lokasi')
@section('title','Berhasil Daftar Lokasi Ujian')
@section('container')

  {{-- Begin of Lokasi --}}
  <div class="container">

    {{-- Begin OF Data Diri Peserta PKBM --}}
    <div style="margin-bottom:0%">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/lokasi" style="text-decoration: none;">Peta Lokasi PKBM</a></li>
          <li class="breadcrumb-item"><a href="/taufiq" style="text-decoration: none;">PKBM AT-Taufiq</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Diri</li>
        </ol>
    </div>

    <div class="card border border-primary mb-5" style="width: 100%;">
      <div class="card-body mb-5 text-center">
          <h5>Pendaftaran Selesai</h5>

          <img src="prettier/images/sukses.png" width="250px" height="250px">
          
          <p>Terima kasih telah memilih PKBM At-Taufiq sebagai lokasi ujian kamu<br><br>Silahkan cek e-mail dan notifikasi untuk detail pelaksanaan ujian</p>

          <div class="container text-center mt-4">
            <a href="/lokasi" class="btn btn-primary">Kembali Ke Home</a></button>
          </div>
      </div>
    </div>
    {{-- END OF PETA LOKASI --}}

  </div>


@endsection