@extends('plantilla')
@section('titulo')
  Mis Actores
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('section')
  <h1>Actores</h1>
  <ul>
    @foreach ($actors as $actor)
    <li><a href="{{ url("/actor/{$actor->id}") }}">{{$actor->getNombreCompleto()}}</a></li>
    @endforeach
  </ul>
@endsection
