<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chachalacos podcast</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="icon" href="{{asset('images/logo.svg')}}">
</head>
<body>
    <!-- Logo -->

        <nav class="navbar navbar-default w-100 position-fixed navbar-light bg-main">
            <div class="container p-1">
                <a class="navbar-brand " href="#">
                    <img src="{{asset('images/logo.svg')}}" width="100" alt="" loading="lazy">
                </a>
            </div>
        </nav>


    <div class="pt-5" {{ isset($categoryIdSelected)? 'hidden': '' }}>
        <h1 class="pt-5 text-center">Chachalacos podcast</h1>
        <div class="container-fluid content">
             <img class="d-block mx-auto" src="{{asset('images/logo.svg')}}" width="500" alt="" loading="lazy">
        </div>
    </div>
       <!-- Contenido -->
       <div class="container-fluid content" {{ isset($categoryIdSelected)? 'hidden': '' }}>
            <iframe class="latestVideoEmbed d-block mx-auto" vnum='0' cid="UC8rFGNXZeskEgJ25_xa3VKQ" width="600" height="340" frameborder="0" allowfullscreen></iframe>
       </div>
       <section class="container-fluid content">
        <!-- Categorías -->
        <div class="row justify-content-center">
            <div class="col-10 col-md-12">
                <nav class="text-center my-5">
                    <a href="/" class="mx-3 pb-3 link-category d-block d-md-inline {{ isset($categoryIdSelected)? '': 'selected-category' }}">Todas</a>
                    @foreach ($categories as $category)
                    <a href="{{route('posts.category', $category->name)}}" class="mx-3 pb-3 link-category d-block d-md-inline  {{ (isset($categoryIdSelected) && $category->id == $categoryIdSelected)? 'selected-category':'' }} ">{{$category->name}}</a>
                    @endforeach
                </nav>
            </div>
        </div>

        <!-- Posts -->
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="row">
                    <!-- Post 1 -->
                    @foreach ($posts as $post)
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset($post->featured)}}" alt="{{$post->name}}">
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
                        </div>
                    </div>
                    @endforeach
                    <!-- Post 2
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">YouDevs</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
                    <!-- Post 3
                    <div class="col-md-4 col-12 justify-content-center mb-5">
                        <div class="card m-auto" style="width: 18rem;">
                            <img class="card-img-top" src="{{asset('images/3.png')}}" alt="Post Python">
                            <div class="card-body">
                                <small class="card-txt-category">Categoría: Programación</small>
                                <h5 class="card-title my-2">Aprende Python en un dos tres</h5>
                                <div class="d-card-text">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Sed voluptatum ab cumque quisquam quod nesciunt fugiat,
                                    eius corrupti nulla veniam, molestias nemo repudiandae?
                                </div>
                                <a href="#" class="post-link"><b>Leer más</b></a>
                                <hr>
                                <div class="row">
                                    <div class="col-6 text-left">
                                        <span class="card-txt-author">YouDevs</span>
                                    </div>
                                    <div class="col-6 text-right">
                                        <span class="card-txt-date">Hace 2 semanas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>-->
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
            <div id="col-md-10">
                <a href="https://www.facebook.com/youdevs">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
                </a>
                <a href="https://www.instagram.com/youdevs">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
                </a>
                <a href="https://www.youtube.com/c/YouDevsOficial">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube youdevs">
                </a>
                <p class="mt-3">Copyright © 2021 Chachalacos Podcast, Blog. <br> Todos los derechos reservados.</p>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        var reqURL = "https://api.rss2json.com/v1/api.json?rss_url=" + encodeURIComponent("https://www.youtube.com/feeds/videos.xml?channel_id=");
        function loadVideo(iframe) {
          $.getJSON(reqURL + iframe.getAttribute('cid'),
            function(data) {
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
        window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
        } else {
        document.getElementById("navbar").style.top = "-50px";
        }
        prevScrollpos = currentScrollPos;
        }
        </script>
</body>
</html>
