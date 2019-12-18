<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
  public function edit()
  {
    return view("users/editProfile");
  }
  public function show()
  {
    return view("users/profile");
  }
  public function update(Request $form)
  {
    $user = User::find($form["id"]);

    $user->name = $form["name"];
    $user->email = $form["email"];
    if(isset($form["avatar"]))
    {
      $path = $form['avatar']->store('public');
      $avatar = basename($path);
      $user->avatar = $avatar;
    }
    $user->save();
    return redirect("user/profile");
  }

}
