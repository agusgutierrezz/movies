@extends('plantilla')
@section('titulo')
  Mis Actores
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('section')
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
      @foreach ($errors-> all() as $error)
        <li>{{$error}}</li>
      @endforeach
      </ul>
    </div>
  @endif
  <h1>Ingresar un actor</h1>
  <form class="" action="/addActor" method="post" enctype="multipart/form-data">
       {{csrf_field()}}
       <div class="">
         <label for="firstName">Name:</label>
         <input type="text" name="firstName" value="{{old("firstName")}}">
       </div>
       <div class="">
         <label for="lastName">Apellido:</label>
         <input type="text" name="lastName" value="{{old("lastName")}}">
       </div>
       <div class="">
         <label for="foto">Foto:</label>
         <input type="file" name="foto" value="{{old("foto")}}">
       </div>

       <button type="submit" name="" value="">Agregar Actor</button>
  </form>
@endsection
