@extends('layouts.lay')

@section('content')

       <main>
         <div class="form-cont">
           <h4>Contact Form</h4>
           <form class="" action="" method="post">
             @csrf
             <input class="controls" type="text" name="name" placeholder="Enter your name">
             <input class="controls" type="email" name="email" placeholder="Enter your email">
             <textarea rows="3" class="form-control" placeholder="Leave here you comment and we contact with you."></textarea>
             <button type="submit" class="botons" >Submit</button>
           </form>
         </div>
      </main>
@endsection
