@extends('layouts.lay')

@section('content')
  <div class="faq-background">
    <h4 class="faq">Categories</h4>
    <ul class="ask">
      @forelse ($categories as $category)
      <li class="faq-li">
        <div class="faq-titulo">
          {{$category->name}}
        </div>
        <form class="" action="/admin/deleteCategory" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$category->id}}">
        <div class="boton edit-faq">
          <button class="boton1" type="submit" name="button" value="delete">Delete</button>
        </div>
      </form>
      </li>
       @empty
         <div>There is nothing</div>
       @endforelse
    </ul>
    <div class="boton edit-faq">
      <a href="/admin/addCategory"><button class="boton1" type="button" name="button">Add</button></a>
    </div>
  </div>
@endsection
