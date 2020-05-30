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
  
</head>
<body>
    <div class="justify-content-md-around">
        <img src="images/iqralogo.jpg" width="100%" height="250" alt="">
    </div>
    <div class="topnav nav" id="myTopnav">
        <a href="{{url('/')}}" class="active"><i class="fa fa-fw fa-home"></i>Home</a>
        <a href="{{url('users')}}"><i class="fa fa-fw fa-user"></i>Existing user Login</a>
        <a href="{{ url('OnlineAdmission')}}"><i class="fa fa-fw fa-user"></i>Apply Online</a>
        <a href="{{ url('uploads')}}"><i class="fa fa-fw fa-file"></i>Upload Documents</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
    </div>

<!-------- Login Model Form------>



<!-------Login Model Form End------>










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



</body>
</html>