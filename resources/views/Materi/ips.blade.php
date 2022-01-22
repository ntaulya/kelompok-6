@extends('layouts.main')
@section('title','IPS Paket A')
@section('container')

    {{-- ISI MATERI --}}
      <div style="margin-bottom:0%; margin-top:20px">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Materi">Semua Kelas</a></li>
            <li class="breadcrumb-item"><a href="/materidetail">Konten Pelajaran</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ilmu Pengetahuan Sosial (IPS) Paket A</li>
          </ol>
      </div>

      <center>
      <div class="ebook pb-3">
        <iframe frameborder='0'  width='900' height='750'  title='Bahasa Indonesia-A8' src='https://emodul.kemdikbud.go.id/A-IPS-2/mobile/index.html' type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>      
      </div>
      </center>
        <button class="learn-more" style="margin-left: 72rem; margin-bottom:3rem;">
          <span class="circle" aria-hidden="true">
          <span class="icon arrow"></span>
          </span>
          <a href="/Materi"><span class="button-text">Kelas Lainnya.</span></a>
        </button>
    {{-- AKHIR MATERI --}}

@endsection

