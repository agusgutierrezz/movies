<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
  public function directory(){
  $users = User::all();
  return view('usuarios', compact('users'));
 }
  public function show($id){
    $user = User::find($id);
    $vac = compact('user');
    return view('profile',$vac);
  }
 public function storeImg(Request $req,$id){
  $user = User::find($id);
  $path = $req->file("foto")->store('public');
  $nombreArchivo = basename($path);
  $user->foto = $nombreArchivo;
  $user->save();
  return redirect('/users');
}
}
