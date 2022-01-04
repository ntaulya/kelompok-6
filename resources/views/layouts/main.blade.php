<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="prettier/main.css">
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3167AF">
        <a class="navbar-brand" href="#">
          <img src="prettier/pkbm.png" width="30" height="35" class="d-inline-block align-top" alt="">
          <div class="container">
            <div class="row">
              <div class="col-lg-2">
                <p style="color:white">PKBM At-Taufiq</p>
              </div>
            </div>
          </div>
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
              <a class="nav-link" style="color: #fff" href="/peta">Peta Lokasi</a>
            </li>
            <li class="nav-ebook">
              <a class="nav-link" style="color: #fff" href="/ebook">E-Book</a>
            </li>
            <li class="nav-kalender">
              <a class="nav-link" style="color: #fff" href="/kalender">Kalender Akademik</a>
            </li>
            <li class="nav-profil">
              <a class="nav-link" style="color: #fff" href="/profilku">Profilku</a>
            </li>
          </ul>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('container')
    </div>

    <div class="fixed-bottom p-4" style="background-color: #3167AF">
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
                <form class="form-inline my-2 my-lg-0">
                    <div class="row">
                      <div class="col-md-6" style="margin-right: 5px">
                        <input class="form-control" type="search" placeholder="Masukkan e-mail anda" aria-label="e-mail">
                      </div>
                      <div class="col-md-6">
                        <button class="btn btn-outline-success btn-md" type="submit">Berlangganan</button>
                      </div>
                    </div>
                </form>
              <h6 class="judul-footer">Ikuti Kami</h6>
                <div class="social-links mt-3">
                  <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                </div>
                <div class="social-links mt-3">
                  <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
  
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>