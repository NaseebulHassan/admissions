<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="javascript" href="js/script.js">
   
</head>
<body>
<div class="container">
 <!--------Content start------->
<div class="row">
     <!--------Header  start------->
    


<!-------- Login Model Form------>
            <div class="col-md-12">
    <div class="justify-content-md-around">
        <img src="images/header.jpg" width="100%" height="250" alt="">
    </div>
    <div class="topnav nav" id="myTopnav">
 <!---   @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            <a href="{{ url('Student_program')}}"><i class="fa fa-fw fa-user"></i>Step_2</a>
            <a href="{{ url('Student_academics')}}"><i class="fa fa-fw fa-user"></i>Step_3</a>
            <a href="{{ url('upload')}}"><i class="fa fa-fw fa-file"></i>Upload Documents</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>--->
            <div style="float:right; margin-left:600px">

            <a href="#"><i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} </a>   
        
   
                <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                              <i class="fa fa-bars"></i>
                            </a>
                                </form>
            </div>
           
           
            
    </div>

    </div>   </div>   </div>









<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
<script src="{{ asset('/js/script.js') }}"></script>


</body>
</html>