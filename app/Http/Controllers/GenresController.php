<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genres;

class GenresController extends Controller
{
   public function directory(){
     $genres = Genres::all();
     return view('generos', compact('genres'));
   }
   public function movies(){
     $genres = Genres::all();
     return view('peliculas/add',compact('genres'));
   }
}
