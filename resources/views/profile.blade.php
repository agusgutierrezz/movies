@extends('layouts.app')
@section('titulo')
Perfil
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('content')
  <h1>Mi perfil</h1>
  <div class="">
    <img src="/storage/{{$user->foto}}" alt="">
  </div>
  <h1>Nombre de usuario: {{$user->name}}</h1>
  <h1>Email de usuario: {{$user->email}}</h1>
  <h2>Queres cambiar tu foto?</h2>
  <form class="" action="/user/{{$user->id}}" method="post" enctype="multipart/form-data">
      @csrf
    <input type="file" name="foto" value="">
    <br>
    <button type="submit" name="button">Agregar</button>
  </form>

@endsection
