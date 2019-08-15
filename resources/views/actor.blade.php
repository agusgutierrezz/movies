@extends('plantilla')
@section('titulo')
  Actores
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('section')
  <div class="jumbotron">
    <h1>Perfil de {{ $actor->getNombreCompleto()}} </h1>
    <div class="">
    <img src="/storage/{{$actor->foto}}" alt="">  
    </div>

    <h3>Rating {{ $actor['rating']}}</h3>
    @if ($actor->pelicula)
    <h3>Favorite movie {{$actor->pelicula->title}}</h3>
    <h3>Peliculas en las que participo</h3>
    <ul>
      @foreach ($actor->peliculas as $movie)
        <li><a href="{{ url("/movie/{$movie->id}") }}">{{$movie->title}}</li>
      @endforeach
    </ul>
    @endif
    <form class="" action="/borrarActor" method="post">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$actor->id}}">
      <button type="submit" name="button">Eliminar actor</button>
    </form>
      <a href="{{ url("/actor/{$actor->id}/edit") }}">Editar actor</a>

  </div>

@endsection
