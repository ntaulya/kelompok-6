@extends('layouts.main')
@section('title','Tambah Tugas')
@section('container')

<div class="card border border-primary mb-5" style="width: 100%;">
    <div class="card-body mb-5">
    <h5 class="text-center">Tambah Tugas</h5>
      <form class="form-inline" method="POST" action="/tambahtugas" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{$user->id}}">
        @csrf
        <div class="form-group row mt-5">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{$user->name}}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nomor ID Siswa</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{$user->nomor_id}}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Paket Program</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{$user->paket_program}}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
            <label for="exampleFormControlSelect1" class="col-sm-2 col-form-label">Mata Pelajaran</label>
            <div class="col-sm-10">
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>- Pilih Mata Pelajaran-</option>
                    <option>IPA</option>
                    <option>Matematika</option>
                    <option>IPS</option>
                    <option>Bahasa Indonesia</option>
                    <option>Bahasa Inggris</option>
                </select>
            </div>
        </div>

        <div class="form-group row mt-3">
            <label for="exampleFormControlTextarea1" class="col-sm-2 col-form-label">Deskripsi Tugas</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
            </div>
        </div>

        <div class="container text-center mt-5">
            <a href="/tambahtugas" class="btn btn-primary">Tambah Tugas</a>
            <button href="/Admin" class="btn btn-warning" style="margin-left: 10px">Batalkan</button>
          </div>
    </div>
</div>

@endsection
