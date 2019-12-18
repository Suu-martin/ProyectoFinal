<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  function index()
  {
    return view('admin/index');
  }
  function addPForm()
  {
    return view('admin/addProduct');
  }
  function products ()
  {
    return view('admin/products');
  }
}
