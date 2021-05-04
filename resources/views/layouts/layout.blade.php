<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('tab-title')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="icon" href="{{asset('images/logo.svg')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
     <!-- Logo -->
     <nav id="navbar-scroll" class="navbar-inverse navbar navbar-default w-100 position-fixed navbar-expand-lg navbar-light bg-main " >
        <a class="navbar-brand" href="/">
            <img src="{{asset('images/logo.svg')}}" width="80" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Noticias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
          </div>
        </div>
</nav>

 @yield('content')

  <!-- agrega aquí el footer -->
  <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="mb-3">
                <img src="{{asset('images/logo.svg')}}" alt="Chachalacos logo" width="120" id="logofooter">
            </div>
            <div class="mx-auto mb-3 col-md-10">
                <a href="#">
                    <img src=" {{asset('images/applepodcast.png')}}" class="img-fluid button" width="130px" alt="Oyenos en apple podcast">
                </a>
                <a href="#" >
                    <img class="img-fluid button" width="115px"  src=" {{asset('images/googlepodcast.png')}} " alt="Oyenos en Google podcast">
                </a>
                <a href="#">
                    <img class="img-fluid button" width="105px"  src="{{asset('images/spotify.png')}}" alt="Oyenos en spotify">
                </a>
            </div>
            <div id="col-md-10">
                <a href="https://www.facebook.com/youdevs">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid button" width="30px" alt="facebook youdevs">
                </a>
                <a href="https://www.instagram.com/youdevs">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid button" width="40px" alt="instagram youdevs">
                </a>
                <a href="https://www.youtube.com/c/YouDevsOficial">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid button" width="50px" alt="youtube youdevs">
                </a>
                <p class="mt-3">Copyright © 2021 Chachalacos Podcast, Blog. <br> Todos los derechos reservados.</p>
                <span class="button">
                    <a class="font-weight-bold text-white" href="https://linktr.ee/MefistoContreras">
                        <img class="img-fluid" width="40px" src=" {{asset('images/mefistoLogo.png')}} "
                            alt="This is the Mefisto's logo">

                        @mystmefisto
                        </a>
                    </span>
                    <span>
                        creó este sitio
                    </span>
                    <a href=" {{route('admin')}}" style="color:rgba(0,0,0,0)">-----------------</a>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
