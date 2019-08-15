@extends('plantilla')
@section('titulo')
  Actores
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('section')
  <div class="jumbotron">
    <h1>Perfil de {{ $movie->title}} </h1>
    <h3>Rating {{ $movie->rating}}</h3>
    <h3>Genero {{ $movie->genre->name}}</h3>
    <h3>Actores que participaron</h3>
  <ul>
    @foreach ($movie->actores as $actor)
        <li><a href="{{ url("/actor/{$actor->id}") }}">{{$actor->getNombreCompleto()}} </li>    
    @endforeach
  </ul>

  </div>

@endsection
