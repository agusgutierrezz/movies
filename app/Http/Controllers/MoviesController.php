<?php

namespace App\Http\Controllers;
use App\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
  public function directory(){
  $peliculas = Movies::all();
  return view('peliculas', compact('peliculas'));
  }
  public function show($id){
    $movie = Movies::find($id);
    $vac = compact('movie');
    return view('movie',$vac);
  }
  public function store(Request $add){
       $reglas = [
       'title'=> 'required|string|min:2|max:255',
       'rating'=>'required|numeric',
       'awards'=>'required|numeric',
       'release_date'=>'date'
       ];
       $this->validate($add,$reglas);
       $movieNew = new Movies();
       $movieNew->title = $add['title'];
       $movieNew->rating = $add['rating'];
       $movieNew->awards = $add['awards'];
      $movieNew->release_date = $add['release_date'];
       $movieNew->save();
       return redirect("peliculas");
     }

}
