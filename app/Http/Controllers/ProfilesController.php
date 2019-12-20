<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\Hash;

class ProfilesController extends Controller
{
  public function show()
  {
    return view("users/profile");
  }

  public function edit()
  {
    return view("users/editProfile");
  }

  public function update(Request $form)
  {
    $rules = [
      'name' => 'required|string|min:3|max:255',
      'password' => 'nullable|confirmed|min:6',
      'avatar' => 'nullable|image',
    ];

    $this->validate($form, $rules);

    $user = User::find(Auth::user()->id);
    if (!(Hash::check($form->get('oldPassword'), Auth::user()->password))) {
           return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
       }
    $user->name = $form["name"];
    $user->password = Hash::make($form['password']);

    if(isset($form["avatar"]))
    {
      $path = $form['avatar']->store('public/avatares');
      $avatar = basename($path);
      $user->avatar = $avatar;
    }
    $user->save();
    return redirect("/profile");
  }

}
