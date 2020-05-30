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
    <title>Admissions-IUIC</title>
    <style>
      form{
        border:solid #2D2A83;
        margin:20px 0px 30px 0px;
        background-color:#3A698A;
        color: white;
      }  
      input{
        margin-left:50px;
      }
      form h2{
        background-color:#27297D;
        width:100%;
        text-align:center;
      }
    </style>
</head>
<body>

 <!--------Header  start------->
    @include("header")

 <!--------Content start------->


<!-------- Login Model Form------>
<form class="col-md-6">
  <h2 class="col-ms-12">Existing Users</h2> 
  <div class="form-group col-md-8"><br>
    <label for="exampleInputEmail1">User Name *</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>
  <div class="form-group col-md-8">
    <label for="exampleInputPassword1">Password *</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <div class="form-check col-md-8">
    <button type="submit" class="btn btn-primary form-control">Login</button>
  </div>
 
</form>



<!-------Login Model Form End------>





        <!--------Footer start------->
        @include("footer")
</body>
</html>