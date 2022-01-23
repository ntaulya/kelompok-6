@extends('layouts.main')
@section('title','IPA Paket A')
@section('container')

    {{-- ISI MATERI --}}
      <div style="margin-bottom:0%; margin-top:20px">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/Materi" style="text-decoration: none;">Semua Kelas</a></li>
            <li class="breadcrumb-item"><a href="/materidetail" style="text-decoration: none;">Konten Pelajaran</a></li>
            <li class="breadcrumb-item active" aria-current="page">Ilmu Pengetahuan Alam (IPA) Paket A</li>
          </ol>
      </div>

      <center>
      <div class="ebook pb-3">
        <iframe frameborder='0'  width='900' height='750'  title='Bahasa Indonesia-A8' src='https://emodul.kemdikbud.go.id/A-IPA-2/mobile/index.html' type='text/html' allowfullscreen='true' scrolling='no' marginwidth='0' marginheight='0'></iframe>      
      </div>
      </center>
        <button class="learn-more" style="margin-left: 72rem; margin-bottom:3rem;">
          <span class="circle" aria-hidden="true">
          <span class="icon arrow"></span>
          </span>
          <a href="/indo"><span class="button-text">Materi Selanjutnya</span></a>
        </button>
    {{-- AKHIR MATERI --}}

@endsection