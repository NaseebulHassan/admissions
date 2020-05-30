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
    <title>IUIC-Admissions</title>
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
          <h3>Personal Information:</h3>
        </div>
        <div class="row "><br>
            
            <div class="col-md-6">
              <label for="" style="text-align:left;">Name</label>
              <input type="text" class="form-control" name="name" placeholder="Enter Name" required><br>
              <label for="">Father Name</label>
              <input type="text" class="form-control" name="fname" placeholder="Enter Father Name" required><br>
              <label for="">Guardian's Name</label>
              <input type="text" class="form-control" name="gname" placeholder="Enter Guardian Name" required><br>
            </div>
            <div class="col-md-6">
              <label for="">CNIC</label>
              <input type="text" class="form-control" name="CNIC" placeholder="Enter student's CNIC" required><br>
              <label for="">CNIC</label>
              <input type="text" class="form-control" name="CNIC" placeholder="Enter Father CNIC" required><br>
              <label for="">CNIC</label>
              <input type="text" class="form-control" name="CNIC" placeholder="Enter Guardian CNIC" required><br>
            </div>
        </div>
        <!-------Personal Information End------>

        <hr>
        <!-------Gender Information start------>
        <div class="col-md-12">
          <h3>Gender:</h3>
        </div>
        <div class="row "><br>
            
            <div class="col-md-4">
              <label for="">Male</label>
              <input type="radio" class="form-control" name="gender" value="m"  required><br>
            </div>
            <div class="col-md-4">  
              <label for="">Female</label>
              <input type="radio" class="form-control" name="gender" value="f"  required><br>  
            </div>
            <div class="col-md-4">
              
              <label for="">Martial Status</label>
              <select name="mstatus" id="mstatus" class="form-control col-md-5">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
              </select>
            </div>
            
        </div>
        <!-------Gender Information End------>
      <hr>
        <!-------Domicile Information start------>
        <div class="col-md-12">
          <h3>Domicile:</h3>
        </div>
        <div class="row "><br>
            
            <div class="col-md-6">
              <label for="">Province</label>
              <input type="text" class="form-control" name="province" placeholder="Enter Province" required><br>
            
            </div>
            <div class="col-md-6">
              <label for="">District</label>
              <input type="text" class="form-control" name="district" placeholder="Enter District" required><br>
            
            </div>
        </div>
        <!-------Domicile Information End------>
      <hr>

      <!-------Dob Information Start------>
      <div class="row "><br>
            
            <div class="col-md-3">
              <label for=""> Date of Birth (*)</label>
              <input type="date" class="form-control" name="dob" placeholder="Enter Date of Birth" required><br>
            
            </div>
            <div class="col-md-3">
              <label for=""> Place of Birth (*)</label>
              <input type="text" class="form-control" name="dop" placeholder="Enter Place of Birth" required><br>
            
            </div>
            <div class="col-md-3">
              <label for="">Nationality1 (*)</label>
              <input type="text" class="form-control" name="nationality1" placeholder="Enter Nationality1" required><br>
            
            </div>
            <div class="col-md-3">
              <label for="">Nationality2</label>
              <input type="text" class="form-control" name="nationality2" placeholder="Enter Nationality2" required><br>
            
            </div>
        </div>
        <!-------Dob Information End------>

        <hr>
        <!-------Current Address Information start------>
        <div class="col-md-12">
          <h3>Present Address of Applicant (*):</h3>
        </div>
        <div class="row "><br>
            
            <div class="col-md-12">
              <textarea name="Presentaddress" id="" cols="119" rows="5" class="col-md-12">
              </textarea>
            </div>
        </div>
        <!-------Current Address Information End------>

        <hr>
        <!-------Tel (Res) (*)  Information start------>
       
        <div class="row "><br>
            
            <div class="col-md-6">
              <label for="">Tel (Res) (*) </label>
              <input type="text" class="form-control" name="ptel" placeholder="Enter Residentialial Telephone " required><br>
            
            </div>
            <div class="col-md-6">
              <label for="">Mobile Phone (*)</label>
              <input type="text" class="form-control" name="pmobile" placeholder="Enter Mobile Phone" required><br>
            
            </div>
        </div>
        <!-------Tel (Res) (*)  Information End------>
<hr>
          <!-------paddress Information start------>
          <div class="row">
            <div class="col-md-10 offset-md-1">
             <input type="checkbox" name="paddress" id="" > &nbsp;Permanant Address (Check if same as above)
            </div>
          </div>
          
 <!-------Current Address Information start------>
 <div class="col-md-12">
          <h3>Permanant Address of Applicant (*):</h3>
        </div>
        <div class="row "><br>
            
            <div class="col-md-12">
              <textarea name="permanantaddress" id="" cols="119" rows="5" class="col-md-12">
              </textarea>
            </div>
        </div>
        <!-------Current Address Information End------>


        <hr>
        <!-------Tel (Res) (*)  Information start------>
       
        <div class="row "><br>
            
            <div class="col-md-6">
              <label for="">Tel (Res) (*) </label>
              <input type="text" class="form-control" name="ptel" placeholder="Enter Residentialial Telephone " required><br>
            
            </div>
            <div class="col-md-6">
              <label for="">Mobile Phone (*)</label>
              <input type="text" class="form-control" name="pmobile" placeholder="Enter Mobile Phone" required><br>
            
            </div>
        </div>
        <!-------Tel (Res) (*)  Information End------>
<hr>

          <div class="row">
              <div class="col-md-6">
                <label for="">Email Address</label>
                <input type="email" name="stemail" id="" class="form-control" placeholder="Enter Email" required>
              </div>
          </div>



          <hr>
        <!-------Father's/Guardian's Information start------>
        <div class="col-md-12">
          <h3>Father's/Guardian's Information:</h3>
        </div>
        <div class="row "><br>
            
            <div class="col-md-6">
              <label for="" style="text-align:left;">Father's/Guardian's Occupation</label>
              <input type="text" class="form-control" name="gname" placeholder="Enter Father's/Guardian's Occupation" required><br>
              
            </div>
            <div class="col-md-6">
              <label for="">Father's/Guardian's Business Address</label>
              <input type="text" class="form-control" name="gcnic" placeholder="Enter Father's/Guardian's Business Address" required><br>
              
            </div>
        </div>
        <div class="row "><br>
            
            <div class="col-md-4">
              <label for="">Tel (Res) (*) </label>
              <input type="text" class="form-control" name="gtel" placeholder="Enter Residentialial Telephone " required><br>
            
            </div>
            <div class="col-md-4">
              <label for="">Mobile Phone (*)</label>
              <input type="text" class="form-control" name="gmobile" placeholder="Enter Mobile Phone" required><br>
            
            </div>
            <div class="col-md-4">
            <label for="">Email Address</label>
                <input type="email" name="gemail" id="" class="form-control" placeholder="Enter Email" required>
            
            </div>
        </div>

        <!-------Father's/Guardian's Information End------>

        <hr>
        <!-------Applicant's Information start------>
        <div class="col-md-12">
          <h3>Applicant's Information:</h3>
        </div>
        <div class="row "><br>
            
            <div class="col-md-6">
              <label for="" style="text-align:left;">Applicant's Designation (if employed)</label>
              <input type="text" class="form-control" name="designation" placeholder="Enter Applicant's Designation" required><br>
              
            </div>
            <div class="col-md-6">
              <label for="">Name of the Organization</label>
              <input type="text" class="form-control" name="orgname" placeholder="Enter Name of the Organization" required><br>
              
            </div>
        </div>
        <div class="row "><br>
            
            <div class="col-md-4">
              <label for="">Disability (if any) </label>
              <input type="text" class="form-control" name="disability" placeholder="Enter Disability " required><br>
            
            </div>
            <div class="col-md-8">
              <label for="">Special arrangements required for the admission test and to attend classes at the campus</label>
              <input type="text" class="form-control" name="sparrange" placeholder="Enter Special arrangements required for the admission" required><br>
            
            </div>
            
        </div>

        <!-------Applicant's Information End------>


        <hr>
        <!-------Emergency Case Information:start------>
        <div class="col-md-12">
          <h3>Emergency Case Information:</h3>
        </div>
        <div class="row "><br>
            
            <div class="col-md-6">
              <label for="" style="text-align:left;">Name</label>
              <input type="text" class="form-control" name="ename" placeholder="Enter Name" required><br>
              <label for="">Telephone No(s)</label>
              <input type="text" class="form-control" name="etel" placeholder="Enter Telephone No" required><br>
              
            </div>
            <div class="col-md-6">
              <label for="">Relationship with the Applicant</label>
              <input type="text" class="form-control" name="relapp" placeholder="Enter Relationship with the Applicant" required><br>
              <label for="">Mobile No</label>
              <input type="text" class="form-control" name="relmobile" placeholder="Enter Mobile No" required><br>
              
            </div>
        </div>
        <div class="row">
           <div class="col-md-12">
              <label for="">Address</label>
              <input type="text" class="form-control" name="reladdress" placeholder="Enter Address" required><br>
              
            </div>
        </div>
        <!-------Emergency Case Information: End------>



        <hr>
        <!-------User Information:start------>
        <div class="col-md-12">
          <h3>User Information::</h3>
        </div>
        <div class="row "><br>
            
            <div class="col-md-6">
              <label for="" style="text-align:left;">User Name</label>
              <input type="text" class="form-control" name="username" placeholder="Enter Name" required><br>
              <label for="">Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter Password" required><br>
              
            </div>
           
        </div>
             <!-------User Information:: End------>
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