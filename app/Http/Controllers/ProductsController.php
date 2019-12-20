<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\Category;

class ProductsController extends Controller
{
    public function listado() {
      $s = "";
      if(isset($_GET["s"]))
      {
        $s = $_GET["s"];
      }
      $datos = Product::join('brand', 'brand_id', '=', 'brand.id')
      ->join('category', 'category_id', '=', 'category.id')
      ->select('products.*','brand.name AS brand_name')
      ->where('products.name','LIKE', "%$s%")
      ->orwhere('brand.name','LIKE', "%$s%")
      ->orwhere('category.name','LIKE', "%$s%")->paginate(8);
      $datos->appends(["s" => $s]);
      $vac = compact("datos","s");

      return view("/home", $vac);
    }
    public function getProducts($in = "")
    {
      $datos = Product::join('brand', 'brand_id', '=', 'brand.id')
      ->join('category', 'category_id', '=', 'category.id')
      ->select('products.*','brand.name AS brand_name')
      ->where('products.name','LIKE', "%$in%")
      ->orwhere('brand.name','LIKE', "%$in%")
      ->orwhere('category.name','LIKE', "%$in%")->paginate(8);
      return response()->json($datos,200);
    }
    public function list()
    {
      $datos = Product::all();
      $vac = compact("datos");
      return view("products/product", $vac);
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

      return redirect("/admin/products");
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

      public function update(Request $req, $id)
      {
        $rules = [
          'name' => 'required|string|max:255',
          'price' => 'required|numeric',
          'description' => 'required|string|min:8|max:2000',
          'stock' => 'required|integer',
          'image' => 'required|image',
        ];

        $this->validate($req,$rules);

        $newProduct = Product::find($id);

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

        return redirect("/admin/products");
      }

      public function lis()
      {
        $datos = Product::all();
        $vac = compact("datos");
        return view("admin/products", $vac);
      }

      public function delete(Request $form) {
        $id = $form["id"];
        $dato = Product::find($id);
        $dato->delete();
        return redirect("/admin/products");
      }

}
