@extends('plantilla')
@section('titulo')
  Mis peliculas
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('section')
  <h1>Peliculas</h1>
  <ul>
    @forelse ($peliculas as $peli)
      <li><a href="{{ url("/movie/{$peli->id}") }}">{{ $peli['title'] . " " . $peli['rating'] }}
        @unless ($peli['rating'] <= 8)
          Recomendada
        @endunless
      </li>
    @empty
      <p>No hay peliculas</p>
    @endforelse
  </ul>
@endsection
