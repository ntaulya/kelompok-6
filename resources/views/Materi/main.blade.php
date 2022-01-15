<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="prettier/main.css">
    <title>Materi Pembelajaran</title>
</head>

<body>

  {{-- NAVBAR --}}
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3167AF">
        <a class="navbar-brand" href="#">
          {{-- Logo PKBM --}}
          <div class="container">
            <div class="row">
              <div class="col-lg-2 mx-2 mb-2">
                <img src="prettier/images/pkbm.png" width="40" height="50" class="d-inline" style="margin-right:10px;" alt="">
                <p class="d-inline mx-2 pb-0 mb-0" style="color:white;">PKBM At-Taufiq</p>
              </div>
            </div>
          </div>
          {{-- END OF LOGO --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-materi">
              <a class="nav-link" style="color: #fff" href="/materi">Materi Pembelajaran</a>
            </li>
            <li class="nav-peta">
              <a class="nav-link" style="color: #fff" href="/lokasi">Peta Lokasi</a>
            </li>
            <li class="nav-profil">
              <a class="nav-link" style="color: #fff" href="/profilku">Profilku</a>
            </li>
          </ul>
        </div>
    </nav>
    {{-- AKHIR DARI NAVBAR --}}

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

    {{-- FOOTER --}}
    <div class="bottom footer p-4" style="background-color: #3167AF">
      <div class="footer-top">
        <div class="container">
          <div class="row">
  
            <div class="col-lg-3 col-md-6 footer-contact">
              <h4 class="judul-footer">PKBM</h4>
              <p>
                PKBM merupakan sebuah lembaga pendidikan non-formal yang memiliki beberapa layanan pendidikan dengan kualitas yang sama seperti pendidikan formal
              </p>
            </div>
  
            <div class="col-lg-2 col-md-6 footer-links">
              <h4 class="judul-footer">Links</h4>
                <li class="link" style="list-style:none;" href="#home">Home</a></li>
                <li class="link" style="list-style:none;" href="#tentang">Tentang Kami</li>
                <li class="link" style="list-style:none;" href="#visimisi">Visi Misi</li>
                <li class="link" style="list-style:none;" href="#mengapa">Mengapa Kami</li>
                <li class="link" style="list-style:none;" href="#kegiatan">Kegiatan</li>
            </div>
  
            <div class="col-lg-3 col-md-6 footer-links">
              <h4 class="judul-footer">Bantuan</h4>
                <li class="bantuan" style="list-style:none;" href="/daftar">Cara Mendaftar</a></li>
                <li class="bantuan" style="list-style:none;" href="/masuk">Masuk</a></li>
            </div>
  
            <div class="col-lg-4 col-md-6 footer-links">
              <h6 class="judul-footer">Yuk berlangganan untuk mendapatkan info terkini</h6>

              <div class="input-group">
                <input type="text" placeholder="Masukan Email Anda" class="form-control">
                <span class="input-group-btn">
                  <button class="btn btn-success btn-outline-warning btn-md" type="submit">Berlangganan</button>                
                </span>
              </div>



              <h6 class="judul-footer mt-5">Ikuti Kami</h6>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="fa fa-twitter text-dark" aria-hidden="true"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="facebook"><i class="fa fa-facebook text-dark"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="instagram"><i class="fa fa-instagram text-dark"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="google-plus"><i class="fa fa-skype text-dark"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="linkedin"><i class="fa fa-linkedin text-dark"></i></a>
                </div>
  
          </div>
        </div>
      </div>
    </div>
    {{-- AKHIR DARI FOOTER --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>