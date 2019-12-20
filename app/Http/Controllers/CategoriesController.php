<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoriesController extends Controller
{
  public function list()
  {
    $categories = Category::all();

    $vac = compact("categories");

    return view("/admin/categoryList", $vac);
  }

  public function detail($id) {
    $category = Category::find($id);

    $vac = compact("category");

    return view("/admin/detailCategory", $vac);
  }

  public function delete(Request $form) {
    $id = $form["id"];

    $category = Category::find($id);

    $category->delete();

    return redirect("/admin/categoryList");
  }

  public function addform() {
    return view("/admin/addCategory");
  }


  public function add(Request $request){
      $newCategory = new Category();
      $newCategory->name = $request["name"];
      $newCategory->save();
      return redirect("/admin/categoryList");
      }

}
