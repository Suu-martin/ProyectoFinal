<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
  public function edit($id)
  {
    $user = User::find($id);

    $vac = compact("user");

    return view("/editProfile", $vac);
  }

  public function update(Request $form, $id)
  {
    $user = User::find($form["id"]);

    $user->name = $form["name"];
    $user->email = $form["email"];
    $user->avatar = $form["avatar"];

    $user->save();

    return redirect("profile");
  }

}
