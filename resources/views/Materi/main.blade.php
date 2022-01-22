<!-- Main Materi -->
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
                        <img src="prettier/images/pkbm.png" width="40" height="50" class="d-inline"
                            style="margin-right:10px;" alt="">
                        <p class="d-inline mx-2 pb-0 mb-0" style="color:white;">PKBM At-Taufiq</p>
                    </div>
                </div>
            </div>
            {{-- END OF LOGO --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-materi">
                    <a class="nav-link" style="color: #fff" href="/Materi">Materi Pembelajaran</a>
                </li>
                <li class="nav-peta">
                    <a class="nav-link" style="color: #fff" href="/lokasi">Peta Lokasi</a>
                </li>
                <div class="dropdown">
                    <button class="dropbtn" onclick="myFunction()">Pengaturan
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content" id="myDropdown">
                      <a href="/profilku">Profilku</a>
                      <a href="/keluar">Keluar</a>
                    </div>
                </div> 
            </ul>
        </div>
    </nav>
    {{-- AKHIR DARI NAVBAR --}}
 
 
    {{-- MAIN CONTENT --}}
    <section>
        <div class="grid-container">
            <!-- left content -->
            <div id="grid-left" class="pt-5 pb-5">
                <div id="tugas" class="row justify-content-center">
                    <div class="col-1">
                        <i class="fa fa-book" style="color:#3167AF;" aria-hidden="true"></i>
                    </div>
                    <div class="col-6">
                      <p class="kelas" style="color:#3167AF">Kelas</p>
                    </div>
                </div>
 
                <div id="tugas" class="row justify-content-center">
                    <div class="col-1">
                        <i class="fa fa-tasks" style='color:#9c9ea1' aria-hidden="true"></i>
                    </div>
                    <div class="col-6">
                      <a href="/tugas" style="text-decoration: none; color:#9c9ea1">Tugas</a>
                    </div>
                </div>
            </div>
 
            <!-- right content -->
 
            <div id="grid-right" class="pt-5 pb-5">
                <div class="ps-3">
                  <h5>Semua Kelas</h6>
                </div>
 
                <div class="container mt-4">
                    <div class="row justify-content-start pb-5">
                        <div class="col-4">
                            <div class="card">
                                <img src="prettier/images/science.jpg" class="card-img-top" alt="ipa" width="250px" height="190px">
                                <div class="card-body">
                                    <h5 class="card-title">Program Kesetaraan</h5>
                                    <p class="card-text">Pendidikan kesetaraan adalah pendidikan non formal yang ditujukan kepada warga negara yang tidak
                                         berkesempatan mengenyam pendidikan formal. Biasa dikenal sebagai Paket A,B dan C</p>
                                </div>
                                <div id="tugas" class="row justify-content-center">
                                    <div class="col-1">
                                        <img src="prettier/emoji/bab.png" alt="..">
                                    </div>
                                    <div class="col-9">
                                        <p>4 Bab</p>
                                    </div>
                                </div>
 
                                <div id="tugas" class="row justify-content-center">
                                    <div class="col-1">
                                        <img src="prettier/emoji/sub-bab.png" alt="..">
                                    </div>
                                    <div class="col-9 ">
                                        <p>12 Sub-bab</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #3167af;">
                                <a class="btn text-light" style="width: 100%; color: #3167af;" href="/materidetail">MULAI</a>
                            </div>
                        </div>
 
                        <div class="col-4">
                            <div class="card">
                                <img src="prettier/images/mathematics.jpg" class="card-img-top" alt="mtk" width="250px" height="190px">
                                <div class="card-body">
                                    <h5 class="card-title">Kursus dan Pelatihan</h5>
                                    <p class="card-text">Merupakan layanan yang menyediakan kursus dan pelatihan, seperti kursus menjahit, kursus komputer dan lainnya
                                        yang berguna untuk meningkatkan daya saing peserta didik di dunia kerja.
                                    </p>
                                </div>
                                <div id="tugas" class="row justify-content-center">
                                    <div class="col-1">
                                        <img src="prettier/emoji/bab.png" alt="..">
                                    </div>
                                    <div class="col-9">
                                        <p>4 Bab</p>
                                    </div>
                                </div>
 
                                <div id="tugas" class="row justify-content-center">
                                    <div class="col-1">
                                        <img src="prettier/emoji/sub-bab.png" alt="..">
                                    </div>
                                    <div class="col-9 ">
                                        <p>12 Sub-bab</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #4d6a8f;">
                                <button class="btn text-light" style="width: 100%; color: #4d6a8f;">KELAS BELUM DIBUKA</button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="card">
                                <img src="prettier/images/social.jpg" class="card-img-top" alt="ips" width="250px" height="190px">
                                <div class="card-body">
                                    <h5 class="card-title">Keaksaraan Buta Mandiri</h5>
                                    <p class="card-text">Pendidikan keaksaraan adalah salah satu bentuk layanan Pendidikan non formal bagi warga masyarakat buta aksara untuk belajar membaca, menulis, dan berhitung. Agar peserta didik tidak tertinggal

                                    </p>
                                </div>
                                <div id="tugas" class="row justify-content-center">
                                    <div class="col-1">
                                        <img src="prettier/emoji/bab.png" alt="..">
                                    </div>
                                    <div class="col-9">
                                        <p>4 Bab</p>
                                    </div>
                                </div>
 
                                <div id="tugas" class="row justify-content-center">
                                    <div class="col-1">
                                        <img src="prettier/emoji/sub-bab.png" alt="..">
                                    </div>
                                    <div class="col-9 ">
                                        <p>12 Sub-bab</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer" style="background-color: #4d6a8f;">
                                <button class="btn text-light" style="width: 100%; color: #4d6a8f;">KELAS BELUM DIBUKA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 
        </div>
    </section>
    {{-- END OF MAIN CONTENT --}}
    
    {{-- FOOTER --}}
    <div class="bottom footer p-4" style="background-color: #3167AF">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h4 class="judul-footer">PKBM</h4>
                        <p>
                            PKBM merupakan sebuah lembaga pendidikan non-formal yang memiliki beberapa layanan
                            pendidikan dengan kualitas yang sama seperti pendidikan formal
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
                                <button class="btn btn-success btn-outline-warning btn-md"
                                    type="submit">Berlangganan</button>
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
        <script>
            /* When the user clicks on the button, 
            toggle between hiding and showing the dropdown content */
            function myFunction() {
              document.getElementById("myDropdown").classList.toggle("show");
            }
            
            // Close the dropdown if the user clicks outside of it
            window.onclick = function(e) {
              if (!e.target.matches('.dropbtn')) {
              var myDropdown = document.getElementById("myDropdown");
                if (myDropdown.classList.contains('show')) {
                  myDropdown.classList.remove('show');
                }
              }
            }
        </script>
    </div>
</body>
</html>