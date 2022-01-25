<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="prettier/index.css">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

  {{-- NAVBAR --}}
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #3167AF">
    <a class="navbar-brand" href="index.php">
      {{-- Logo PKBM --}}
      <div class="container">
        <div class="row">
          <div class="col-lg-2 mb-2" style="margin-left: 10px;">
            <img src="prettier/images/pkbm.png" width="40" height="50" class="d-inline" style="" alt="">
          </div>
          <div class="col-lg-2" style="margin-top: 15px;">
            <p class="d-inline pb-0 mb-0" style="color:white;">Pusat Kegiatan Belajar Masyarakat At-Taufiq</p>
          </div>
        </div>
      </div>
      {{-- END OF LOGO --}}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 150px;">
      <ul class="navbar-nav">
        <li class="nav-masuk" style="margin-right: 10px;">
          <button type="button" class="btn" style="background-color: #F7DE06; color: #3167AF;"><a href="/masuk" style="text-decoration: none;"><b>Masuk</b></a></button>
        </li>
        <li class="nav-daftar">
          <a class="nav-link" style="color: white" href="/daftar">Daftar</a>
        </li>
      </ul>
    </div>
  </nav>
    {{-- AKHIR DARI NAVBAR --}}


  {{-- MAIN CONTENT --}}
  <div class="container mt-4">
    @yield('container')
  </div>
  {{-- END OF MAIN CONTENT --}}
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>