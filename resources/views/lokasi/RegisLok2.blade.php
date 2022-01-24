@extends('layouts.lokasi')
@section('title','Data Diri Peserta Ujian PKBM At-Taqwa')
@section('container')

  {{-- Begin of Lokasi --}}
  <div class="container">

    {{-- Begin OF Data Diri Peserta PKBM --}}
    <div style="margin-bottom:0%">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/lokasi" style="text-decoration: none;">Peta Lokasi PKBM</a></li>
          <li class="breadcrumb-item"><a href="/taqwa" style="text-decoration: none;">PKBM At-Taqwa</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Diri</li>
        </ol>
    </div>

    <div class="card border border-primary mb-5" style="width: 100%;">
      <div class="card-body mb-5">
        <h5 class="card-title text-center text-primary mb-5 pb-2">DATA DIRI PESERTA UJIAN ONSITE PKBM AT-TAQWA</h5>
        <form class="form-inline" action="{{ route('daftar-ujian') }}" method="POST">
          @csrf
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nomor Induk Siswa</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" value="{{ Auth::user()->nomor_id }}" disabled>
            </div>
          </div>

          <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" value="{{ Auth::user()->name }}" disabled>
            </div>
          </div>

          <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Paket Program</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputPassword" value="{{ Auth::user()->paket_program }}" disabled>              
            </div>
          </div>

          <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="mata_pelajaran" id="mata_pelajaran1" value="IPA">
                <label class="form-check-label" for="mata_pelajaran1">
                  IPA
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="mata_pelajaran" id="mata_pelajaran2" value="IPS">
                <label class="form-check-label" for="mata_pelajaran2">
                  IPS
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="mata_pelajaran" id="mata_pelajaran3" value="MTK">
                <label class="form-check-label" for="mata_pelajaran3">
                  MTK
                </label>
              </div>
            </div>
          </div>

          <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Ujian</label>
            <div class="col-sm-10">
              <input type="date" class="form-control" id="inputPassword" name="tanggal_ujian">
            </div>
          </div>

          <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Waktu Pelaksanaan Ujian</label>
            <div class="col-sm-10">
              <input type="time" class="form-control" id="inputPassword" name="jam_ujian">
            </div>
          </div>

          <input type="hidden" name="lokasi_ujian" value="PKBM AT-Taqwa">

          <div class="container text-center mt-5">
            <button type="submit" name="submit" class="btn btn-primary">Daftar Ujian</button>
          </div>

        </form>
      </div>
    </div>
    {{-- END OF PETA LOKASI --}}

  </div>


@endsection