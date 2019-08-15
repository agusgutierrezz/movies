@extends('plantilla')
@section('titulo')
  Agregar Pelicula
@endsection
@section('estilo')
  <link rel="stylesheet" href="/css/app.css">
@endsection
@section('section')
<div class="container">
  @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
      @foreach ($errors-> all() as $error)
        <li>{{$error}}</li>
      @endforeach
      </ul>
    </div>
  @endif
  <form class="" action="/addMovie" method="post">
       {{csrf_field()}}
       <div class="">
         <label for="title">Titulo:</label>
         <input type="text" name="title" value="{{old("title")}}">
       </div>
       <div class="">
         <label for="rating">Rating:</label>
         <input type="text" name="rating" value="{{old("rating")}}">
       </div>
       <div class="">
         <label for="awards">Awards:</label>
         <input type="text" name="awards" value="{{old("awards")}}">
       </div>
       <div class="">
         <label for="">Release Date:</label>
         <input type="date" name="release_date" value="">
       </div>
       <div class="">
         <label for="">Genre:</label>
         <select class="form-control" name="genre_id">
                 <option value="">Elegí un género</option>
                 @foreach ($genres as $genre)
                   <option value="{{$genre->id}}">{{$genre->name}}</option>
                 @endforeach

               </select>
       </div>

       <button type="submit" name="" value="">Agregar Pelicula</button>
  </form>
  </div>
@endsection
