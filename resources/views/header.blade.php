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
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  
</head>
<body>

  <div class="col-md-12">
            <div class="justify-content-md-around">
                <img src="images/header.jpg" width="100%" height="250" alt="">
            </div>
            <div class="topnav nav" id="myTopnav1">
                @if (Route::has('login'))
                            <div class="top-right links">
                                @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                @else
                                    <a href="{{ route('userlogin') }}">Login</a>
                                    
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                                  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                              <i class="fa fa-bars"></i>
                            </a>
                              
            </div>
       </div>
     
        <script>
        function myFunction() {
          var x = document.getElementById("myTopnav1");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
        </script>



</body>
</html>