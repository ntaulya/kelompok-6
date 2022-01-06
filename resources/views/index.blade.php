<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="prettier/index.css">
    <title>Pusat Kegiatan Belajar Masyarakat At-Taufiq</title>
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
                <p class="d-inline mx-2 pb-0 mb-0" style="color:white;">Pusat Kegiatan Belajar Masyarakat At-Taufiq</p>
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
            <li class="nav-masuk">
              <a class="nav-link" style="color: white" href="/materi">Masuk</a>
            </li>
            <li class="nav-daftar">
              <button type="button" class="btn" style="background-color: #F7DE06; color: #3167AF">Daftar</button>
            </li>
          </ul>
        </div>
    </nav>
    {{-- AKHIR DARI NAVBAR --}}


    {{-- MAIN CONTENT --}}
    <div class="container mt-5">
      <h5>Solusi Pendidikan Indonesia Maju</h5>
      {{-- <img class="d-inline mx-2 pb-0 mb-0" src="prettier/images/education.png" width="300px" height="190px" style="text-align: right"> --}}
      <p>Mari menjadi pelopor pendidikan di Indonesia yang berkontribusi<br>penting dalam pembangunan manusia</p>
      <button type="button" class="btn btn-light" style="background-color: #7397CB; color: #fff">Mulai Belajar<img src="prettier/emoji/book-emoji.png" width="30px" height="30px"></button>
    </div>
    
    <div class="col-lg-12 col-md-6 mt-5" style="background-color: #3167AF">
      <h5 class="judul text-center">Tentang</h5>
      <div class="row">
        <div class="col-sm-2">
          <img class="tentang" src="prettier/images/ink.png" width="200px" width="200px">
        </div>
        <div class="col-sm-10 mt-2" style="color:white;">
          Pusat Kegiatan Belajar Masyarakat (PKBM) At-Taufiq adalah lembaga yang dibentuk 
          oleh masyarakat untuk masyarakat yang bergerak dalam bidang pendidikan Non Formal
          yang berada di desa Majannang, Kecamatan Parigi, Kab. Gowa. PKBM ini masih berada di bawah pengawasan dan bimbingan dari Dinas Pendidikan Nasional. 
          PKBM ini bisa berupa tingkat desa ataupun kecamatan</p>
        </div>
      </div>
    </div>
    
    <div class="container mt-5">
      <div class="row">
        <div class="col-sm-2">
          <img class="visi-misi-gambar" src="prettier/images/visi-misi.png" width="200px" width="200px">
        </div>
        <div class="col-sm-10">
          <h5 class="visi-judul text-right">Visi</h5>
            <p class="visi text-right">Menjadi lembaga pendidikan dan pelatihan yang berkualitas<br>menciptakan usaha mandiri</p>
          <h5 class="misi-judul text-right">Misi</h5>
            <p class="misi text-right">1. Menyelenggarakan pendidikan dan pelatihan bagi masyarakat<br>
              2. Melakukan pelatihan dan bimbingan sesuai dengan kebutuhan lapagan pekerjaan yang ada<br>
              3. Memberikan motivasi menjadi wirausaha yang mandiri<br>
              4. Menjadi lembaga pendidikan yang menciptakan SDM pekerja keras, cerdas, tuntas, dan ikhlas<br>
              5. Melakukan kerjasama kemitraan yang sinergis dengan pihak lain</p>
        </div>
      </div>
    </div>

    <div class="col-lg-12 col-md-6 mt-5" style="background-color: #3167AF">
      <h5 class="judul text-center">Mengapa PKBM?</h5>
      <div class="row">
        <div class="col-sm-12 mt-2" style="color:white;">
          <img class="ceklis" src="prettier/emoji/checklist-emoji.png" width="20px" width="20px">
          Pembelajaran pada PKBM sudah setara dengan pendidikan formal
        </div>
        <div class="col-sm-12 mt-3" style="color:white;">
          <img class="ceklis" src="prettier/emoji/checklist-emoji.png" width="20px" width="20px">
          Di PKBM menyediakan layanan program berupa:
          <ul>
            <li>Pendidikan Anak Usia Dini (PAUD)</li>
            <li>Pendidikan Kesetaraan</li>
            <li>Pendidikan Keaksaraan</li>
            <li>Taman Bacaan Masyarakat (TBM)</li>
            <li>Kursus dan Pelatihan</li>
            <li>Pendidikan Keluarga</li>
          </ul>
        </div>
        <div class="col-sm-12 mt-3" style="color:white;">
          <img class="ceklis" src="prettier/emoji/checklist-emoji.png" width="20px" width="20px">
          Meningkatkan kemandirian dan kreativitas peserta didik
        </div>
        <div class="col-sm-12 mt-3" style="color:white;">
          <img class="ceklis" src="prettier/emoji/checklist-emoji.png" width="20px" width="20px">
          Pembelajaran peserta didik  merupakan pembelajaran yang fleksibel, dapat dilakukan dimana saja dan kapan saja
        </div>
        <div class="col-sm-12 mt-3" style="color:white;">
          <img class="ceklis" src="prettier/emoji/checklist-emoji.png" width="20px" width="20px">
          Pembelajaran peserta didik menerapkan teori dalam praktik nyata sehingga kedepannya lebih mudah dalam penerapan kehidupan sehari-hari 
        </div>
        <div class="col-sm-12 mt-3" style="color:white;">
          <img class="ceklis" src="prettier/emoji/checklist-emoji.png" width="20px" width="20px">
          Peserta didik memperoleh keterampilan yang dapat digunakan ketika lulus pembelajaran 
        </div>
      </div>
    </div>
    
    <div class="container mt-5">
      <h5 class="kegiatan text-center">Kegiatan Kami</h5>
      <p class="deskripsi text-center">Kami melakukan pembelajaran berbasis online dan onsite dengan rincian sebagai berikut</p>
        <div class="row row-cols-1 row-cols-md-3">
          <div class="col mb-4">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Pendidikan Keaksaraan</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">TPAD</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
          </div>
          <div class="col mb-4">
            <div class="card">
              <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Pendidikan Keluarga</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </div>
          </div>
        </div>
    </div>
    
    {{-- END OF MAIN CONTENT --}}

    {{-- FOOTER --}}
    <div class="bottom footer p-4 mt-2" style="background-color: #3167AF">
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
                      <div class="col-12" style="margin-right: 5px">
                        <input class="form-control" type="search" placeholder="Masukkan e-mail anda" aria-label="e-mail">
                        <button class="d-inline btn btn-success btn-outline-warning btn-md" type="submit">Berlangganan</button>
                      </div>
                    </div>
                </form>



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