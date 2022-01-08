@extends('layouts.main')
@section('title','Data Diri Peserta Ujian PKBM At-Taqwa')
@section('container')

  {{-- Begin of Lokasi --}}
  <div class="container">

    {{-- Begin OF Data Diri Peserta PKBM --}}
    <div style="margin-bottom:0%">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/lokasi">Peta Lokasi PKBM</a></li>
          <li class="breadcrumb-item"><a href="/taqwa">PKBM At-Taqwa</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Diri</li>
        </ol>
    </div>

    <div class="card border border-primary mb-5" style="width: 100%;">
      <div class="card-body mb-5">
        <h5 class="card-title text-center text-primary mb-5 pb-2">DATA DIRI PESERTA UJIAN ONSITE PKBM AT-TAQWA</h5>
        <form class="form-inline">
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nomor Induk Siswa</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword">
            </div>
          </div>

          <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword">
            </div>
          </div>

          <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Paket Program</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                <label class="form-check-label" for="exampleRadios1">
                  Paket Kesetaraan A
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Paket Kesetaraan B
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
                <label class="form-check-label" for="exampleRadios3">
                  Paket Kesetaraan C
                </label>
              </div>
            </div>
          </div>

          <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword">
            </div>
          </div>

          <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Ujian</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="inputPassword">
            </div>
          </div>

          <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Waktu Pelaksanaan Ujian</label>
            <div class="col-sm-10">
              <input type="time" class="form-control" id="inputPassword">
            </div>
          </div>

          <div class="container text-center mt-5">
            <a href="/suksesdaftar" class="btn btn-primary">Daftar Ujian</a></button>
          </div>

        </form>
      </div>
    </div>
    {{-- END OF PETA LOKASI --}}

  </div>


@endsection