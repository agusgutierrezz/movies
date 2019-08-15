@extends('plantilla')
@section('titulo')
  Mis Actores
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('section')
  <form class="" action="/editarActor" method="post">
       {{csrf_field()}}

       <div class="">
        <input type="hidden" name="id" value="{{$actorUpd->id}}">
         <label for="firstName">Name:</label>
         <input type="text" name="firstName" value="{{$actorUpd->first_name}}">
       </div>
       <div class="">
         <label for="lastName">Apellido:</label>
         <input type="text" name="lastName" value="{{$actorUpd->last_name}}">
       </div>
       <input type='hidden' name='_method' value='PUT'>
       <button type="submit" name="" value="">Editar Actor</button>
  </form>
@endsection
