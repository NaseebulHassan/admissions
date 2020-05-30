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
        padding:20px;
      }  
      input{
        margin-left:50px;
      }
      form h2{
        background-color:#27297D;
        width:100%;
        text-align:center;
        padding:20px;
      }
      form h3{
          text-align:left;
      }
      .buttn{
        background-color:#27297D;
        
      }
    </style>
</head>
<body>

 <!--------Header  start------->
    @include("header")

 <!--------Content start------->


<!-------- Login Model Form------>
<div class="col-md-12">


      <form class="col-md-12">
        <h2 class="col-ms-12">IUIC Online Application form </h2> 
      <hr>
        <!-------Personal Information start------>
        <div class="col-md-12">
          <h3>Upload Documents: (Only pdf file can upload)</h3>
        </div>
        <div class="row "><br>
            
            
            <div class="col-md-6">
              <label for="">Student's CNIC</label>
              <input type="file" class="form-control" name="CNIC" placeholder="Enter student's CNIC" required><br>
              <label for="">Father's CNIC</label>
              <input type="file" class="form-control" name="CNIC" placeholder="Enter Father CNIC" required><br>
              <label for="">Guardian's CNIC</label>
              <input type="file" class="form-control" name="CNIC" placeholder="Enter Guardian CNIC" required><br>
            </div>
        </div>
        <!-------Personal Information End------>

<hr>
             <div class="row">
                <div class="col-md-12 btn">
                  <input type="button" value="Submit"  class="form-control buttn" style="background-color:#27297D;color:white;">
                </div>
             </div>
      </form>



      <!-------Login Model Form End------>
  </div>




        <!--------Footer start------->
        @include("footer")
</body>
</html>