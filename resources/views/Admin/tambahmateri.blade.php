@extends('layouts.main')
@section('title','Tambah Materi')
@section('container')

<div class="card border border-primary mb-5" style="width: 100%;">
    <div class="card-body mb-5">
    <h5 class="text-center">Tambah Materi</h5>
      <form class="form-inline" method="POST"action="/tambahmateri" enctype="multipart/form-data">
        <input type="hidden" name="id" value="{{$user->id}}">
        @csrf
        <div class="form-group row mt-5">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{$user->name}}" readonly name="name">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nomor ID Siswa</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{$user->nomor_id}}" readonly name="nomor_id">
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Paket Program</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{$user->paket_program}}" readonly name="paket_program">
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
          <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah Bab</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputPassword" name="jumlah_bab">
          </div>
        </div>

        <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah Sub-Bab</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputPassword" name="jumlah_subbab">
            </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Upload Materi</label>
          <div class="col-sm-10">
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="materi">
          </div>
        </div>

        <div class="container text-center mt-5">
          <a href="/tambahmateri" class="btn btn-primary">Tambah Materi</a>
          <button href="/Admin" class="btn btn-warning" style="margin-left: 10px">Batalkan</button>
        </div>

      </form>
    </div>
</div>

@endsection