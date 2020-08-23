<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>Admissions-IUIC</title>

</head>
<body>

 <!--------Header  start------->
    @include("header2")

 <!--------Content start------->

 <div class="container">
 <!--------Content start------->
<div class="row">
     <!--
<!-------- Login Model Form------>
<div class="col-md-12">


  <form class="col-md-12" method="post" action="{{route('uploaded')}}"  enctype="multipart/form-data">
  @csrf
  <div class="col-md-12">
                  <h2 class="col-ms-12">IUIC Online Application form </h2> 
                </div>
        <div class="col-md-12">
              <div class="row">
                    
                  <div class="col-md-6">
                    User ID :: {{Auth::user()->id}}
                    <input type="hidden" name="student_id" class="hidden" value="{{Auth::user()->id}}"> 
                  </div>
              </div>
            
          </div>
        
      <hr>
        <!-------Personal Information start------>
        <div class="col-md-12">
          <h3>Upload Documents: </h3>
        </div>
        <div class="row "><br>
            
            
            <div class="col-md-6">
              <label for="">Student's CNIC/or Form B</label>
              <input type="file" class="form-control" name="student_cnic" placeholder="Enter student's CNIC" required><br>
              <label for="">Matric/O' Level Certificates</label>
              <input type="file" class="form-control" name="matric_degree" placeholder="Enter Father CNIC" required><br>
              <label for="">FA/F.Sc/A' Level Certificates</label>
              <input type="file" class="form-control" name="inter_degree" placeholder="Enter Guardian CNIC" required><br>
              <label for="">Recent passport size photograph</label>
              <input type="file" class="form-control" name="student_photo" placeholder="Enter student's CNIC" required><br>
            </div>
            
            <div class="col-md-6">
              <label for="">Bachelor's Degree & Transcript/Marks Sheet</label>
              <input type="file" class="form-control" name="CNIC" placeholder="Enter student's CNIC" ><br>
              <label for="">Master's Degree & Transcript/Marks Sheet (if applicable)</label>
              <input type="file" class="form-control" name="CNIC" placeholder="Enter Father CNIC" ><br>
              <label for="">Equivalence Certificate (if applicable)</label>
              <input type="file" class="form-control" name="CNIC" placeholder="Enter Guardian CNIC" ><br>
              <label for="">NTS score sheet, GAT-General (if applicable)</label>
              <input type="file" class="form-control" name="CNIC" placeholder="Enter Guardian CNIC" ><br>
            </div>
        </div>
        <!-------Personal Information End------>

<hr>
             <div class="row">
                <div class="col-md-12 btn">
                  <input type="submit" value="Submit"  class="form-control buttn" style="background-color:#27297D;color:white;">
                </div>
             </div>
      </form>



      <!-------Login Model Form End------>
  </div>




        <!--------Footer start------->
        @include("footer")


        </div>
              </div>
</body>
</html>