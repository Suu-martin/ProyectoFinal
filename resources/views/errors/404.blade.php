@extends('layouts.lay')

@section('content')
  <div class="form-cont">
     <h4>¡We are sorry but this page does not exist!</h4>
     ¡You will be redirected in 5 seconds!
     <a href="/"><button type="submit" class="botons">Manual Redirect</button></a>
   </div>
   <script type="text/javascript">
     setTimeout(function () {
       window.location.replace("/");
     }, 5000);
   </script>
@endsection
