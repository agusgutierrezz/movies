<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
  public $table = "genres";
  //public $primaryKey = "id";
  //public $guarded[];
public function peliculas(){
  return $this->hasMany("app\Movies","genre_id");
}
}
