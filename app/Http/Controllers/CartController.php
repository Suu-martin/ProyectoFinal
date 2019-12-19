<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class CartController extends Controller
{
  private function start()
  {
    if(isset($_SESSION["cart"]))
      {
  		    $cart = $_SESSION["cart"];
       }
    else
      {
		      $cart = [];
	        $_SESSION["cart"] = $cart;
	     }
    return $cart;
  }
  public function index()
  {
    $cart = $this->start();
    $vac = compact("cart");
    return view('cart/index',$vac);
  }
  public function addItem(Request $req)
  {
    // $cart = $this->start();
    // $item = Product::find($req->id);
    // if($item)
    // {
    //   $cart [] = $item;
    //   $_SESSION["cart"] = $cart;
    //   return 1;
    // }
    // else
    // {
    //   return 0;
    // }
    return "EEEEEEEEEEEOOOOOOOOO";
  }
}
