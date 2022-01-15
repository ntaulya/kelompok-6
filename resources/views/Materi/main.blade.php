@extends('layouts.main')
@section('title','Materi Pembelajaran')
@section('container')

<div class="container-lg-12">
  <div class="row">
    <div class="col-sm-3">
      <div class="col-lg-12 col-md-6" style="background-color: #fff">
        Kelas<br>Tugas
      </div>
    </div>
    <div class="col-sm-9">
      <div class="col-lg-12 col-md-6" style="background-color: #f5f5f5">
        <h5>Semua Kelas</h5>
        <br><br>
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card">
              <img src="" class="card-img-top" alt="ipa">
                <div class="card-body">
                  <h5 class="card-title">Ilmu Pengetahuan Alam</h5>
                  <p class="card-text">Ilmu alam mempelajari aspek-aspek fisik & nonmanusia tentang Bumi dan alam sekitarnya. Ilmu-ilmu alam membentuk landasan bagi ilmu terapan, yang keduanya dibedakan dari ilmu sosial, humaniora, teologi, dan seni.</p>
                </div>
                <div class="card-footer">
                  <button type="button" class="btn btn-light">Lanjutkan</button>
                </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="" class="card-img-top" alt="matematika">
                <div class="card-body">
                  <h5 class="card-title">Matematika</h5>
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