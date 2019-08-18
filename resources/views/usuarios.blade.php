@extends('plantilla')
@section('titulo')
Usuarios
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('section')
<div class="container">
  <h1 class="m-4">Usuarios</h1>
  <ul>
    @foreach ($users as $user)
    <li>{{$user->name}}</li>
    @endforeach
  </ul>
  </div>
@endsection
