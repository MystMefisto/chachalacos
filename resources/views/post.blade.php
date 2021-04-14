@extends('layouts.layout')
@section('tab-title')
    <title>{{$post->title}} - {{$post->author}}</title>
@endsection

@section('content')

<!-- Contenido -->
<section class="container-fluid content py-5">
        <div class="row justify-content-center">
            <!-- Post -->
            <div class="col-12 col-md-7 text-center">
                <h1>{{$post->title}}</h1>
                <hr>
                <img src=" {{asset($post->featured)}} " alt="{{$post->title}}" class="img-fluid">

                <p class="text-left mt-3 post-txt">
                    <span>Autor:  {{$post->author}} </span>
                    <span class="float-right">Publicado: Hace {{$post->created_at->diffForHumans()}}</span>
                </p>
                <p class="text-left">
                    {{$post->content}}
                </p>
                <p class="text-left post-txt"><i>Categoría: {{$post->category->name}} </i></p>
            </div>

            <!-- Entradas recientes -->
            <div class="col-md-3 offset-md-1">
                <p>Últimas entradas</p>
                @foreach($latestPosts as $post)
                <div class="row mb-4">
                    <div class="col-4 p-0">
                        <a href=" {{route('post',$post->id)}} ">
                            <img src=" {{asset($post->featured)}} " class="img-fluid rounded" width="200" alt=" {{$post->title}} ">
                        </a>
                    </div>
                    <div class="col-7 pl-0">
                        <a href="{{route('post',$post->id)}}" class="link-post"> {{$post->title}} </a>
                    </div>
                </div>
                @endforeach
        </div>
    </section>

    <!-- Posts relacionados -->
    <section class="container-fluid content py-5">
        <div class="row justify-content-center">
            <!-- Post -->
            <div class="col-12 text-center">
                <h2>Entradas relacionadas</h2>
                <hr class="post-hr">
            </div>
            <!-- Post 1 -->

            @foreach ($relatedPosts as $post)
            <div class="col-md-4 col-12 justify-content-center mb-5">
                <div class="card m-auto" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset($post->featured)}}" alt=" {{$post->title}} ">
                    <div class="card-body">
                        <small class="card-txt-category">Categoría: {{$post->category->name}}</small>
                        <h5 class="card-title my-2">{{$post->title}}</h5>
                        <div class="d-card-text">
                            {{Str::limit($post->content,150,'...')}}
                        </div>
                        <a href="{{route('post',$post->id)}}" class="post-link"><b>Leer más</b></a>
                        <hr>
                        <div class="row">
                            <div class="col-6 text-left">
                                <span class="card-txt-author">{{$post->author}}</span>
                            </div>
                            <div class="col-6 text-right">
                                <span class="card-txt-date">Hace {{$post->created_at->diffForHumans()}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection
