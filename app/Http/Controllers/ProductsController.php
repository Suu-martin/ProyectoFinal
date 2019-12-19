<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;

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
      return view("products/productList", $vac);
    }
    public function detail($id)
    {
      $datos = Product::find($id);
      $vac = compact("datos");
      return view("products/product",$vac);
    }

    public function addPForm() {
      return view("/admin/addProduct");
    }

    public function add(Request $req)
    {
      $rules = [
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'description' => 'required|string|min:8|max:2000',
        'stock' => 'required|integer',
        'image' => 'required|image',
      ];

      $this->validate($req,$rules);

      $newProduct = new Product();

      $path = $req['image']->store('public/products');
      $image = basename($path);

      $newProduct->name = $req["name"];
      $newProduct->price = $req["price"];
      $newProduct->brand_id = $req["brand"];
      $newProduct->category_id = $req["category"];
      $newProduct->description = $req["description"];
      $newProduct->stock = $req["stock"];
      $newProduct->image = $image;

      $newProduct->save();

      return redirect("/productList");
    }

     public function li()
      {
        $brands = Brand::all();
        $categories = Category::all();

        $vac = compact("datos","brands","categories");

        return view("/admin/addProduct", $vac);
      }

      public function edit($id) {
        $dato = Product::find($id);
        $brands = Brand::all();
        $categories = Category::all();
        $vac = compact("dato", "brands", "categories");
        return view("/admin/editProduct", $vac);
      }

      public function update(Request $req)
      {
        $rules = [
          'name' => 'required|string|max:255',
          'price' => 'required|numeric',
          'description' => 'required|string|min:8|max:2000',
          'stock' => 'required|integer',
          'image' => 'required|image',
        ];

        $this->validate($req,$rules);

        $newProduct = new Product();

        $path = $req['image']->store('public/products');
        $image = basename($path);

        $newProduct->name = $req["name"];
        $newProduct->price = $req["price"];
        $newProduct->brand_id = $req["brand"];
        $newProduct->category_id = $req["category"];
        $newProduct->description = $req["description"];
        $newProduct->stock = $req["stock"];
        $newProduct->image = $image;

        $newProduct->save();

        return redirect("/productList");
      }

      public function lis()
      {
        $datos = Product::all();
        $vac = compact("datos");
        return view("admin/products", $vac);
      }


}
