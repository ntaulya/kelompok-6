@extends('layouts.main')
@section('title','Pusat Kegiatan Belajar Masyarakat At-Taufiq')
@section('container')

  {{-- Begin of Lokasi --}}
  <div class="container">

    {{-- Begin OF PETA LOKASI --}}
    <h5 class="card-title">Peta Lokasi PKBM</h5>
    <div class="card" style="width: 100%;">
      <div class="card-body">
        <div>
          <iframe src="https://www.google.com/maps/d/embed?mid=1LJTuvWhl85ijdGKp5TBz44QzSB6I1Gcu&ehbc=2E312F" width="100%" height="600"></iframe>        
        </div>
      </div>
    </div>
    {{-- END OF PETA LOKASI --}}

    {{-- BEGIN OF TEMPAT 1 --}}
    <div class="card mb-3" style="width: 100%;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="https://www.idlememe.com/wp-content/uploads/2021/10/beluga-cat-meme-idlememe-5.jpg" width="400px" height="140px" alt="Lokasi 1">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">PKBM AT-Taufiq</h5>
            <p class="card-text">Jl. Sukamakmur No.15 Desa Majannang , Kecamatan Parigi, Kab. Gowa</p>
            <p class="card-text"><a href="/taufiq" class="btn btn-primary">Pilih Lokasi</a></p>
          </div>
        </div>
      </div>
    </div>
    {{-- END OF TEMPAT 1 --}}

    {{-- BEGIN OF TEMPAT 2 --}}
    <div class="card mb-3" style="width: 100%;">
      <div class="row no-gutters">
        <div class="col-md-4">
          <img src="https://i.ytimg.com/vi/UVhHYHYXao8/mqdefault.jpg" width="400px" height="140px" alt="Lokasi 1">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">PKBM AT-Taqwa</h5>
            <p class="card-text">Jl. Sukamandi No.23 Desa Malabeh , Kecamatan Parigi, Kab. Gowa</p>
            <p class="card-text"><a href="/taqwa" class="btn btn-primary">Pilih Lokasi</a></p>
          </div>
        </div>
      </div>
    </div>
    {{-- END OF TEMPAT 2 --}}

  </div>


{{-- End of Lokasi --}}

@endsection