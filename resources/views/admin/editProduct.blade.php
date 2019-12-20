@extends('layouts.lay')

@section('content')

  <div class="form-cont">
    <h4>Edit Product</h4>
    <form class="" action="{{"/admin/editProduct"}}" method="post" enctype="multipart/form-data">
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
              <option value="{{ $brand->id }}" {{($dato->brand_id == $brand->id)? "selected" : ""}}>{{ $brand->name }}</option>
            @endforeach
          </select>
        </div>
        <div class="">
         <div> <label for="category">Category:</label> </div>
         <select class="selector" name="category" >
           @foreach ($categories as $category)
           <option value="{{ $category->id }}" {{($dato->category_id == $category->id)? "selected" : ""}}>{{ $category->name }}</option>
           @endforeach
         </select>
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
      <a href="/admin/editProduct/{id}"><button class="botons" type="submit" name="button" value="save">Save</button></a>
    </form>
  </form>
  </div>

@endsection
