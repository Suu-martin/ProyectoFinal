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

    return view("/admin/brandList", $vac);
  }

  public function detail($id) {
    $brand = Brand::find($id);

    $vac = compact("brand");

    return view("/admin/detailBrand", $vac);
  }

  public function delete(Request $form) {
    $id = $form["id"];

    $brand = Brand::find($id);

    $brand->delete();

    return redirect("/admin/brandList");
  }

  public function addform() {
    return view("/admin/addBrand");
  }


  public function add(Request $request){
      $newBrand = new Brand();
      $newBrand->name = $request["name"];
      $newBrand->save();
      return redirect("/admin/brandList");
      }

}
