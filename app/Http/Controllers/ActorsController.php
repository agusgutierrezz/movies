<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorsController extends Controller
{
public function directory(){
$actors = Actor::all();
return view('actores', compact('actors'));
}
public function show($id){
  $actor = Actor::find($id);
  $vac = compact('actor');
  return view('actor',$vac);
}

public function ver(){
  return view('actores\add');
}
public function store(Request $add){
     $reglas = [
     'firstName'=> 'required|string|min:2|max:255',
     'lastName'=>'required|string|unique:actors,last_name'
     ];
     $this->validate($add,$reglas);
     $actorNew = new Actor();
     $ruta = $add->file("foto")->store('public');
     $nombreFoto = basename($ruta);
     $actorNew->foto = $nombreFoto;
     $actorNew->first_name = $add['firstName'];
     $actorNew->last_name = $add['lastName'];
     $actorNew->save();
     return redirect("actores");
   }
public function edit( $id){
    $actorUpd = Actor::find($id);
    return view('actor/edit',compact('actorUpd'));
  }
public function borrar(Request $req){
  $id = $req["id"];
  $actor = Actor::find($id);
  $actor->delete();
  return redirect('actores');
}
  public function update(Request $req){
    $id = $req["id"];
    $actor = Actor::find($id);
    $actor->first_name = $req["firstName"];
    $actor->last_name = $req["lastName"];
    $actor->save();
    return redirect('/actores');
  }

}
