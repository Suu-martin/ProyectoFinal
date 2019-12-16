<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class BrandsController extends Controller
{
  public function list()
  {
    $brands = Brand::all();

    $vac = compact("brands");

    return view("/brand", $vac);
  }

}
