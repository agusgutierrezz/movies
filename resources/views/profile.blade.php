@extends('plantilla')
@section('titulo')
Perfil
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('section')
  <h1>Mi perfil</h1>
  <div class="">
    <img src="{{$user->foto}}" alt="">
  </div>
  <h1>Nombre de usuario: {{$user->name}}</h1>
  <h1>Email de usuario: {{$user->email}}</h1>
@endsection
