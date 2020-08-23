
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="/js/script.js"></script>
    <title>IUIC-Admissions</title>

    </style>
</head>
<body>

 <!--------Header  start------->
    @include("header2")

 <!--------Content start------->

 <div class="container">
 <!--------Content start------->
@if(count($errors)>0)
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>

    @endforeach
    </div>
@endif
        <div class="row">
                <!--
            <!-------- Login Model Form------>
            <div class="col-md-12">


              <form class="col-md-12" id="basicinfo" method="POST" action="{{ url('studentinfo')}}">
                  @csrf
                    <h2 class="col-ms-12">IUIC Online Application form   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Step-1 </h2> 
                  <hr>
                    <!-------Personal Information start------>
                  
                    <div class="col-md-12">
                        <div class="row">
                              <div class="col-md-6">
                                      <h3>Personal Information:</h3>
                            </div>
                            <div class="col-md-6">
                                  <div style="background-color:#2E2F81; padding:5px" class="col-sm-4">
                                  Form No : &nbsp;{{Auth::user()->id}}
                                  <input type="hidden" name="student_id" id=""  value="{{Auth::user()->id}}">
                                      </div> 
                            </div>
                        </div>
                      
                    </div>
                    <div class="row "><br>
                    
                        <div class="col-md-6">
                          <label for="" style="text-align:left;">Name (*)</label>
                          <input type="text" class="form-control" name="student_name" placeholder="Enter Name" ><br>
                          <label for="">Father Name (*)</label>
                          <input type="text" class="form-control" name="father_name" placeholder="Enter Father Name" ><br>
                          <label for="">Guardian's Name (*)</label>
                          <input type="text" class="form-control" name="guardian_name" placeholder="Enter Guardian Name" ><br>
                        </div>
                        <div class="col-md-6">
                          <label for="">Student's CNIC (*)</label>
                          <input type="text" class="form-control" name="student_cnic" id="cnic" maxlength="15" placeholder="Enter student's CNIC" ><br>
                          <label for="">Father's CNIC (*)</label>
                          <input type="text" class="form-control" name="father_cnic"  id="father_cnic" maxlength="15" placeholder="Enter Father CNIC" ><br>
                          <label for="">Guardian's CNIC (*)</label>
                          <input type="text" class="form-control" name="guardian_cnic" id="guardian_cnic" maxlength="15" placeholder="Enter Guardian CNIC" ><br>
                        </div>
                    </div>
                    <!-------Personal Information End------>

                    <hr>
                    <!-------Gender Information start------>
                
                    <div class="row "><br>
                        
                          <div class="col-md-4">
                            <label for="">Gender: (*)</label>
                            <select name="gender" id="mstatus" class="form-control col-md-12">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                          </div>
                          
                            <div class="col-md-4">
                              
                              <label for="">Martial Status (*)</label>
                              <select name="martial_status" id="mstatus" class="form-control col-md-12">
                                <option value="single">Single</option>
                                <option value="married">Married</option>
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
                          <label for="">Province (*)</label>
                          <input type="text" class="form-control" name="domicile_province" placeholder="Enter Province" ><br>
                        
                        </div>
                        <div class="col-md-6">
                          <label for="">District (*)</label>
                          <input type="text" class="form-control" name="domicile_district" placeholder="Enter District" ><br>
                        
                        </div>
                    </div>
                    <!-------Domicile Information End------>
                  <hr>

                  <!-------Dob Information Start------>
                  <div class="row "><br>
                        
                        <div class="col-md-3">
                          <label for=""> Date of Birth (*)</label>
                          <input type="date" class="form-control" name="date_of_birth" placeholder="Enter Date of Birth" ><br>
                        
                        </div>
                        <div class="col-md-3">
                          <label for=""> Place of Birth (*)</label>
                          <input type="text" class="form-control" name="place_of_birth" placeholder="Enter Place of Birth" ><br>
                        
                        </div>
                        <div class="col-md-3">
                          <label for="">Nationality1 (*)</label>
                          <input type="text" class="form-control" name="nationality1" placeholder="Enter Nationality1" ><br>
                        
                        </div>
                        <div class="col-md-3">
                          <label for="">Nationality2</label>
                          <input type="text" class="form-control" name="nationality2" placeholder="Enter Nationality2" ><br>
                        
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
                          <textarea name="present_address" id="present_address" cols="119" rows="2" class="col-md-12" >
                          </textarea>
                        </div>
                    </div>
                    <!-------Current Address Information End------>

                    <hr>
                    <!-------Tel (Res) (*)  Information start------>
                  
                    <div class="row "><br>
                        
                        <div class="col-md-6">
                          <label for="">Tel (Res) (*) </label>
                          <input type="text" class="form-control" name="present_tel" id="present_tel" maxlength="12" placeholder="Enter Residentialial Telephone " ><br>
                        
                        </div>
                        <div class="col-md-6">
                          <label for="">Mobile Phone (*)</label>
                          <input type="text" class="form-control" name="present_mobile" id="present_mobile" maxlength="12" placeholder="Enter Mobile Phone" ><br>
                        
                        </div>
                    </div>
                    <!-------Tel (Res) (*)  Information End------>
            <hr>
                      <!-------paddress Information start------>
                  
                      
            <!-------Permanant Address Information start------>
            <div class="col-md-12">
                      <h3>Permanant Address of Applicant :(*)</h3>
                    </div>
                    <div class="row "><br>
                        
                    
                        <div class="col-md-12">
                          <textarea name="permanent_address" id="permanent_address" cols="119" rows="2" class="col-md-12" >
                          </textarea>
                        </div>
                    </div>
                    <!-------Current Address Information End------>


                    <hr>
                    <!-------Tel (Res) (*)  Information start------>
                  
                    <div class="row "><br>
                        
                        <div class="col-md-6">
                          <label for="">Tel (Res)  </label>
                          <input type="text" class="form-control" name="perm_tel" id="perm_tel"  maxlength="12"  placeholder="Enter Residentialial Telephone " ><br>
                        
                        </div>
                        <div class="col-md-6">
                          <label for="">Mobile Phone </label>
                          <input type="text" class="form-control" name="perm_mobile" id="perm_mobile"  maxlength="12"  placeholder="Enter Mobile Phone" ><br>
                        
                        </div>
                    </div>
                    <!-------Tel (Res) (*)  Information End------>
                <hr>

                      <div class="row">
                          <div class="col-md-6">
                            <label for="">{{Auth::user()->email}}</label>
                            <input type="hidden" name="student_email" id="" value="{{Auth::user()->email}}" class="form-control" placeholder="Enter Email" >
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
                          <input type="text" class="form-control" name="father_occupation" placeholder="Enter Father's/Guardian's Occupation" ><br>
                          
                        </div>
                        <div class="col-md-6">
                          <label for="">Father's/Guardian's Business Address</label>
                          <input type="text" class="form-control" name="fbusiness_address" placeholder="Enter Father's/Guardian's Business Address" ><br>
                          
                        </div>
                    </div>
                    <div class="row "><br>
                        
                        <div class="col-md-4">
                          <label for="">Tel (Res) </label>
                          <input type="text" class="form-control" name="father_tel" placeholder="Enter Residentialial Telephone " maxlength="12" ><br>
                        
                        </div>
                        <div class="col-md-4">
                          <label for="">Mobile Phone </label>
                          <input type="text" class="form-control" name="father_mobile" placeholder="Enter Mobile Phone"  maxlength="12"><br>
                        
                        </div>
                        <div class="col-md-4">
                        <label for="">Email Address</label>
                            <input type="email" name="father_email" id="" class="form-control" placeholder="Enter Email" >
                        
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
                          <input type="text" class="form-control" name="applicant_designation" placeholder="Enter Applicant's Designation" ><br>
                          
                        </div>
                        <div class="col-md-6">
                          <label for="">Name of the Organization</label>
                          <input type="text" class="form-control" name="organisation_name" placeholder="Enter Name of the Organization" ><br>
                          
                        </div>
                    </div>
                    <div class="row "><br>
                        
                        <div class="col-md-4">
                          <label for="">Disability (if any) </label>
                          <input type="text" class="form-control" name="disability" placeholder="Enter Disability " ><br>
                        
                        </div>
                        <div class="col-md-8">
                          <label for="">Special arrangements  for the admission test and to attend classes at the campus</label>
                          <input type="text" class="form-control" name="special_arrangement" placeholder="Enter Special arrangements  for the admission" ><br>
                        
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
                          <input type="text" class="form-control" name="emergency_name" placeholder="Enter Name" ><br>
                          <label for="">Telephone No(s)</label>
                          <input type="text" class="form-control" name="em_telephone" placeholder="Enter Telephone No"  maxlength="12"><br>
                          
                        </div>
                        <div class="col-md-6">
                          <label for="">Relationship with the Applicant</label>
                          <input type="text" class="form-control" name="relation_applicant" placeholder="Enter Relationship with the Applicant" ><br>
                          <label for="">Mobile No</label>
                          <input type="text" class="form-control" name="em_mobile" placeholder="Enter Mobile No" maxlength="12" ><br>
                          
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <label for="">Address</label>
                          <input type="text" class="form-control" name="em_address" placeholder="Enter Address" ><br>
                          
                        </div>
                    </div>
                    <!-------Emergency Case Information: End------>



                  
                        <hr>
                        <div class="row">
                            <div class="col-md-12 btn">
                              <input type="submit" value="Save" Onclick="personal_info(event)" class="form-control buttn" style="background-color:#555555;color:white;">
                            </div>
                        </div>
                </form>



                
            </div>

        <!--------Footer start------->
        @include("footer")


        </div> 
</div>
        
      <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/bootstrap.js" type="text/javascript"></script>
      <script src="{{asset('js/basicinfo.js')}}" type="text/javascript"></script>


      </script>
      <script src="js/script.js"></script>
  </body>
</html>