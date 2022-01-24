@extends('layouts.main')
@section('title','Tugas')
@section('container')


{{-- MAIN CONTENT --}}
    <section>
        <div class="grid-container">
            <!-- left content -->
            <div id="grid-left" class="pt-5 pb-5">
                <div id="tugas" class="row justify-content-center">
                    <div class="col-1">
                        <img src="prettier/emoji/kelas.png"  alt="..">
                    </div>
                    <div class="col-6">
                      <p >Kelas</p>
                    </div>
                </div>
 
                <div id="tugas" class="row justify-content-center">
                    <div class="col-1">
                      <img src="prettier/emoji/tugas.png" style="color:#3167AF" alt="..">
                    </div>
                    <div class="col-6">
                    <p class="kelas" style="color:#3167AF">Tugas</p>
                    </div>
                </div>
            </div>

            
 
            <!-- right content -->
 
            <div id="grid-right" class="pt-5 pb-5">
                <div class="card">
                  <h5>Semua Tugas</h5>
                </div>
 
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ilmu Pengetahuan Alam</h4>
                  <h class="card-text">Tugas membuat kerajinan tangan <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                  <h class="card-text">Tugas membuat kerajinan kepala <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                  <h class="card-text">Tugas membuat kerajinan kaki <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                  <h class="card-text">Tugas membuat kerajinan perut <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                </div>
              </div>
 <!-- satu kotak-->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Matematika</h4>
                  <h class="card-text">Tugas membuat kerajinan tangan <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                  <h class="card-text">Tugas membuat kerajinan kepala <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                  <h class="card-text">Tugas membuat kerajinan kaki <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                  <h class="card-text">Tugas membuat kerajinan perut <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                </div>
              </div>
               <!-- satu kotak-->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ilmu pengetahuan sosial</h4>
                  <h class="card-text">Tugas membuat kerajinan tangan <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                  <h class="card-text">Tugas membuat kerajinan kepala <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                  <h class="card-text">Tugas membuat kerajinan kaki <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                  <h class="card-text">Tugas membuat kerajinan perut <a href="#" class="col-md-1 offset-md-7 btn btn-warning" type="button"> Kirim</a> </p>
                </div>
              </div>
        </div>
    </section>
    {{-- END OF MAIN CONTENT --}}


@endsection