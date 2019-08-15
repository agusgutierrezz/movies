@extends('plantilla')
@section('titulo')
Generos
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('section')
  <h1>Generos</h1>
  <ul>
    @foreach ($genres as $genre)
      <li>{{ $genre['name']}}
      @endforeach
  </ul>
@endsection
