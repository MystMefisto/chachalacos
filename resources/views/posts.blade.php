<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chachalacos podcast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="icon" href="{{asset('images/logo.svg')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Roboto+Condensed:wght@300;400;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Logo -->
    <nav id="navbar-scroll" class="navbar-inverse navbar navbar-default w-100 position-fixed navbar-expand-lg navbar-light bg-main " >
            <a class="navbar-brand" href="#">
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

    <video autoplay preload="auto" muted loop id="bg-video">
        <source src="{{asset('images/background.mp4')}}" type="video/mp4">
    </video>



    <header class="header-container" {{ isset($categoryIdSelected)? 'hidden': '' }}>
        <div class="bg-overlay pt-5 container-fluid">
                <h1 class="text-center text-white header-title mx-auto"> CHACHALACOS PODCAST</h1>
            <img class="d-block mx-auto header-logo" src="{{asset('images/logo.svg')}}" width="500" alt="" loading="lazy">
            <h2 class="header-presentation text-white text-center">UN PODCAST AUTENTICO DE NOTICIAS</h2>
        </div>
    </header>
    <!-- Contenido -->
    <div class="container-fluid bg-overlay pt-5 text-white" {{ isset($categoryIdSelected)? 'hidden': '' }}>
        <iframe class="latestVideoEmbed mb-5 d-block mx-auto mw-100" vnum='0' cid="UC8rFGNXZeskEgJ25_xa3VKQ" width="600"
            height="340" frameborder="0" allowfullscreen></iframe>
        <p class="mx-auto text-center">Nuestro último programa</p>
        <div>
            <p class="presentation-text">Chachalacos es un podcast genuino de noticias. Nacido de las noticias que nos
                comentamos los amigos entre pláticas, ahora hecho para su disfrute. Donde Isaac Cordero y sus amigos dan
                su innecesaria opinión sobre lo que
                acontece en el mundo para que usted no tenga que hacer el trabajo de investigación y disfrute con una
                cerveza.
            </p>
        </div>
    </div>
    <section class="category-container bg-overlay container-fluid">
        <!-- Categorías -->
        <div class="row justify-content-center pt-5">
            <div class="col-10 col-md-12">
                <h2 class="text-center text-white">LAS NOTICIAS DE LAS QUE PLATICAMOS</h2>
                <nav class="text-center my-5">
                    <a href="/"
                        class="mx-3 p-3 link-category btn btn-outline-light d-block d-md-inline {{ isset($categoryIdSelected)? '': 'selected-category' }}">TODAS</a>
                    @foreach ($categories as $category)
                    <a href="{{route('posts.category', $category->name)}}"
                        class="mx-3 p-3 link-category btn btn-outline-light d-block d-md-inline  {{ (isset($categoryIdSelected) && $category->id == $categoryIdSelected)? 'selected-category':'' }} ">{{$category->name}}</a>
                    @endforeach
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Posts -->
                    @foreach ($posts as $post)
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: {{$post->category->name}} </small>
                                <h5 class="card-title my-2">{{$post->title}}</h5>
                                <div class="d-card-text">
                                    {{Str::limit($post->content,150,'...')}}
                                </div>
                                <a href="{{route('post',$post->id)}}" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author"> {{$post->author}} </span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date"> {{$post->created_at->diffForHumans()}} </span>
                                    </div>
                                </div>
                            </div>
                            <img class="img-fluid rounded-img" src="{{asset($post->featured)}}" alt="{{$post->name}}">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-12">
                <!-- Paginador -->

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            <div class="my-1">
                <img src="{{asset('images/logo.svg')}}" alt="YouDevs logo" width="120" id="logofooter">
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
                <a href="#">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid button" width="30px" alt="facebook chachalacos">
                </a>
                <a href="#">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid button" width="40px" alt="instagram chachalacos">
                </a>
                <a href="#">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid button" width="50px" alt="youtube chachalacos">
                </a>
                <p class="font-weight-bold mt-3">Copyright © 2021 Chachalacos Podcast, Blog. <br> Todos los derechos reservados.</p>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
        </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent(
                "https://www.youtube.com/feeds/videos.xml?channel_id=");

            function loadVideo(iframe) {
                $.getJSON(reqURL + iframe.getAttribute('cid'),
                    function (data) {
                        var videoNumber = (iframe.getAttribute('vnum') ? Number(iframe.getAttribute('vnum')) : 0);
                        console.log(videoNumber);
                        var link = data.items[videoNumber].link;
                        id = link.substr(link.indexOf("=") + 1);
                        iframe.setAttribute("src", "https://youtube.com/embed/" + id + "?controls=1");
                    }
                );
            }
            var iframes = document.getElementsByClassName('latestVideoEmbed');
            for (var i = 0, len = iframes.length; i < len; i++) {
                loadVideo(iframes[i]);
            }

            var prevScrollpos = window.pageYOffset;
            window.onscroll = function () {
                var currentScrollPos = window.pageYOffset;
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("navbar-scroll").style.top = "0";
                } else {
                    document.getElementById("navbar-scroll").style.top = "-130px";
                }
                prevScrollpos = currentScrollPos;
            }

        </script>
</body>

</html>
