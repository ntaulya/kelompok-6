@extends('layouts.main')
@section('title','Materi IPA')
@section('container')

    {{-- ISI MATERI --}}
      <div style="margin-bottom:0%; margin-top:20px">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Materi">Semua Kelas</a></li>
            <li class="breadcrumb-item"><a href="/mainmateri">Ilmu Pengetahuan Alam</a></li>
            <li class="breadcrumb-item active" aria-current="page">I : Objek IPA dan Pengamatannya</li>
          </ol>
      </div>

      <center>
      <div class="ebook pb-3">
          <iframe src="https://drive.google.com/file/d/1hQyCaPCsMEzlucP0AJii4anF3sgr8gKF/preview" width="640" height="480" allow="autoplay"></iframe>
      </div>
      </center>
    {{-- AKHIR MATERI --}}

@endsection