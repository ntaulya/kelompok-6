@extends('layouts.main')
@section('title','Admin Page')
@section('container')

<div class="card border border-primary mb-5" style="width: 100%;">
    <div class="card-body mb-5">
      <form class="form-inline">
        <div class="form-group row mt-5">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nama Lengkap</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{ auth()->user()->name }}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Nomor ID Siswa</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{ auth()->user()->nomor_id }}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Paket Program</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputPassword" value="{{ Auth::user()->paket_program }}" readonly>
          </div>
        </div>

        <div class="form-group row mt-3">
            <label for="exampleFormControlSelect1">Mata Pelajaran</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>IPA</option>
                    <option>Matematika</option>
                    <option>IPS</option>
                    <option>Bahasa Indonesia</option>
                    <option>Bahasa Inggris</option>
                </select>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah Bab</label>
          <div class="col-sm-10">
            <input type="number" class="form-control" id="inputPassword">
          </div>
        </div>

        <div class="form-group row mt-3">
            <label for="inputPassword" class="col-sm-2 col-form-label">Jumlah Sub-Bab</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="inputPassword">
            </div>
        </div>

        <div class="form-group row mt-3">
          <label for="inputPassword" class="col-sm-2 col-form-label">Upload Materi</label>
          <div class="col-sm-10">
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
          </div>
        </div>

        <div class="container text-center mt-5">
          <a href="" class="btn btn-primary">Tambah Materi</a></button>
        </div>

      </form>
    </div>
</div>

@endsection