@extends('layouts.lay')

@section('content')

  <div class="form-cont">
    <h4>Add Product</h4>
    <form class="" action=" {{"/admin/addProduct"}}" method="post" enctype="multipart/form-data">
    @csrf
      <input class="controls" type="text"  name="name" placeholder="Name *" value="{{old("name")}}" >
      @error ('name')
        {{$message}}
      @enderror
      <input class="controls" type="number" name="price" placeholder="Price *" value="{{old("price")}}" >
      @error ('price')
        {{$message}}
      @enderror
      <div class="marca-categoria">
        <div class="">
          <div> <label for="brand">Brand:</label> </div>
          <select class="selector" name="brand" >
            @foreach ($brands as $brand)
              <option value="{{ $brand->id }}">{{ $brand->name }}</option>
            @endforeach
            <option value="0">Add brand</option>
          </select>
          <input type="text" class="option-selector" name="addMarc" value="" placeholder="Select add!">
        </div>
        <div class="">
         <div> <label for="category">Category:</label> </div>
         <select class="selector" name="category" >
           @foreach ($categories as $category)
           <option value="{{ $category->id }}">{{ $category->name }}</option>
           @endforeach
           <option value="0">Add category</option>
         </select>
         <input type="text" class="option-selector" name="addCat" value="" placeholder="Select add!">
        </div>
      </div>
      <textarea class="controls" name="description" rows="3" cols="20" placeholder="Description *">{{old("description")}}</textarea>
      @error ('description')
        {{$message}}
      @enderror
      <input class="controls" type="text" name="stock" placeholder="Stock *" value="{{old("stock")}}">
      @error ('stock')
        {{$message}}
      @enderror
      <div> <label for="avatar">Image (Not optional)</label> </div>
      <input class="controls" type="file" name="image" id="avatar">
      @error ('image')
        {{$message}}
      @enderror
      <input  class="botons" type="submit" value="Add">
    </form>
  </form>
  </div>

@endsection
