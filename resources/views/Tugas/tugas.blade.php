@extends('layouts.main')
@section('title','Tugas')
@section('container')

<div>
      <div class="row">
        <div class="col-lg-3">
          <div class="col-lg-12 col-md-6" style="background-color: #fff">
            <ul>
              <li>Kelas</li>
              <li>Tugas</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="col-lg-12 col-md-6" style="background-color: #f5f5f5">
            <h5>Semua Tugas</h5>
            <br><br>
            <div class="card">

              </div>
              <div class="col mb-4">
                <div class="card">
                  <img src="" class="card-img-top" alt="matematika">
                    <div class="card-body">
                      <h5 class="card-title">Ilmu pengetahuan alam</h5>
                      <p class="card-text">Cabang matematika yang melingkupi penerapan 
                        pengetahuan matematika ke bidang-bidang lain, 
                        mengilhami dan membuat penggunaan temuan-temuan 
                        matematika baru seperti statistika dan teori permainan.</p>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="btn btn-light">Lanjutkan</button>
                    </div>
                </div>
              </div>
              <div class="col mb-4">
                <div class="card">
                  <img src="" class="card-img-top" alt="ips">
                    <div class="card-body">
                      <h5 class="card-title">Ilmu Pengetahuan Sosial</h5>
                      <p class="card-text">Sekelompok disiplin akademis yang mempelajari aspek-aspek yang berhubungan dengan manusia dan lingkungan sosialnya. Ilmu ini berbeda dengan seni dan humaniora yang menekankan kepada ilmu humaniora.</p>
                    </div>
                    <div class="card-footer">
                      <button type="button" class="btn btn-light">Lanjutkan</button>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection