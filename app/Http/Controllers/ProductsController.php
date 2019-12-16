<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function listado() {
      $datos = Product::paginate(5);

      $vac = compact("datos");

      return view("/home", $vac);
    }

    public function list()
    {
      $datos = Product::all();

      $vac = compact("datos");

      return view("/productList", $vac);
    }

}
