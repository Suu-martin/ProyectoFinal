@extends('layouts.lay')

@section('content')
    <div class="faq-background">
      <h4 class="faq">Brands</h4>
      <ul class="ask">
        @forelse ($brands as $brand)
        <li class="brand">
          <div class="faq-titulo">
          {{$brand->name}}
        </div>
        <form class="" action="/admin/deleteBrand" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$brand->id}}">
        <div class="boton edit-faq">
          <a href="/deleteBrand"><button class="boton1" type="submit" name="button" value="delete">Delete</button></a>
        </div>
      </form>
        </li>
      @empty
      @endforelse
      </ul>
      <div class="boton edit-faq">
        <a href="/admin/addBrand"><button class="boton1" type="button" name="button">Add</button></a>
      </div>
    </div>

@endsection
