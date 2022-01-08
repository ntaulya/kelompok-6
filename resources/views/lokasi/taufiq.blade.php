@extends('layouts.main')
@section('title','Peta Lokasi Pusat Kegiatan Belajar Masyarakat At-Taufiq')
@section('container')

  {{-- Begin of Lokasi --}}
  <div class="container">

    {{-- Begin OF PETA LOKASI 2 --}}
    <h5 class="card-title">Peta Lokasi PKBM AT-Taufiq</h5>
    <div style="margin-bottom:0%">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/lokasi">Peta Lokasi PKBM</a></li>
          <li class="breadcrumb-item active" aria-current="page">PKBM AT-Taufiq</li>
        </ol>
    </div>
    <div class="card" style="width: 100%;">
      <div class="card-body">
        <div>
          <img src="prettier/images/taufiq.jpeg" width="100%" height="750px" alt="Lokasi 1">
        </div>
      </div>
    </div>
    {{-- END OF PETA LOKASI --}}

    {{-- BEGIN OF TEMPAT 2 --}}
    <div class="card mb-3 mt-3" style="width: 100%;">
      <div class="row no-gutters">
        <div class="col-md-12">
          <div class="card-body" style="width: 100%;">
            <h5 class="card-title">PKBM AT-Taufiq</h5>
            <p class="card-text">Jl. Sukamakmur No.15 Desa Majannang , Kecamatan Parigi, Kab. Gowa</p>
            <p class="card-text text-center"><a href="/RegLok1" class="btn btn-primary">Pilih Tempat Ujian</a></p>
          </div>
        </div>
      </div>
    </div>
    {{-- END OF TEMPAT 2 --}}


  </div>


{{-- End of Lokasi 2 --}}

@endsection