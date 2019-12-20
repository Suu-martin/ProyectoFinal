<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class CartController extends Controller
{
  private function start()
  {
    session_start();
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
    $cart = $this->start();
    $item = Product::find($req->id);
    if($item)
    {
      if(isset($cart[$req->id]))
      {
        if($item->stock > $cart[$req->id]["cant"]){
          $cart[$req->id]["cant"] = $cart[$req->id]["cant"] + 1;
          $_SESSION["cart"] = $cart;
          return 1;
        } else {
          return -1;
        }
      } else {
        if ($item->stock > 0)
        {
          $cart[$req->id] = ["item" => $item,  "cant" => 1];
          $_SESSION["cart"] = $cart;
          return 1;
        } else {
          return -1;
        }
      }

    }
    else
    {
      return -10;
    }
   }
   public function remItem(Request $req)
   {
     $cart = $this->start();
     if($cart[$req->id]["cant"]>1) {
     $cart[$req->id]["cant"] = $cart[$req->id]["cant"] - 1;
     $_SESSION["cart"] = $cart;
       return 1;
     } else {
       return -1;
     }
    }
    public function delItem($item)
    {
      $cart = $this->start();
      if(isset($cart[$item])) {
      unset($cart[$item]);
      $_SESSION["cart"] = $cart;
      }
      return redirect("/cart");
    }
}
