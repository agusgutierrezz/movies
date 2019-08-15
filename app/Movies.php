<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
  public $table = "movies";
  //public $primaryKey = "id";
  //public $guarded[];
  public function genre(){
    return $this->belongsTo("App\Genres","genre_id");
  }
  public function actores(){
  return $this->belongsToMany("App\Actor",'actor_movie',"movie_id","actor_id");
}
}
