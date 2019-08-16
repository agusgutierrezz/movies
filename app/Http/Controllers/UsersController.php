<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
//  public function directory(){
//  $users = User::all();
//  return view('profile', compact('users'));
//  }
  public function show($id){
    $user = User::find($id);
    $vac = compact('user');
    return view('profile',$vac);
  }
}
