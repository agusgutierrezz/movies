<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public $table = "actors";
    //public $primaryKey = "id";
    //public $guarded[];

    public function getNombreCompleto(){
      return $this->first_name. " " .$this->last_name;
    }
    public function pelicula(){
      return $this->belongsTo("App\Movies","favorite_movie_id");
    }
    public function peliculas(){
   return $this->belongsToMany("App\Movies",'actor_movie','actor_id',"movie_id");
 }
}
