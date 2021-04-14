<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/logo.svg')}}">
</head>
@extends('adminlte::page')
@section('title', 'Panel de administración')


@section('content_header')
    <h2>Introducción al panel de administración</h2>
@stop

@section('content')
    <p>Bienvenido al menú de administración de la página. Cualquier problema o requirimiento hablar directamente con Carlos.
        Hay solamente un par de cosas que se pueden hacer:</p>
        <ul>
            <li>Administrar categorías</li>
            <li>Administrar entradas del blog</li>
        </ul>
        <h3 class="text-primary"> <i class="fas fa-hand-point-left"></i>  Usa el menú de la izquierda</h3>
@stop

