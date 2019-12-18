@extends('layouts.lay')

@section('content')
<div class="form-cont">
  <h4>Admin Panel</h4>
  <ul>
    <a href="/admin/products">
      <li class="controls item-admin">
        <span class="">
          Products
        </span>
      </li>
    </a>
    <a href="/admin/brands">
      <li class="controls item-admin">
        Brands
      </li>
    </a>
    <a href="/admin/categories">
      <li class="controls item-admin">
        Categories
      </li>
    </a>
    <a href="/admin/faqList">
      <li class="controls item-admin">
        FAQ's
      </li>
    </a>
  </ul>
</div>
@endsection
