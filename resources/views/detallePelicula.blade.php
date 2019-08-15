@extends('plantilla')
@section('titulo')
  Detalle de peliculas
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('section')
<ul>
  @foreach ($pelis as $peli)
    <li>{{HTML::link('detallePelicula' . $peli['id'], $peli['nombre'])}}</li>

  @endforeach
</ul>
