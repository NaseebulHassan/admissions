
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
                          <input type="text" class="form-control" name="student_name" placeholder="Enter Name" value="{{ old('student_name')?old('student_name'): '' }}" required><br>
                          <label for="">Father Name (*)</label>
                          <input type="text" class="form-control" name="father_name" placeholder="Enter Father Name"  value="{{ old('father_name')?old('father_name'): '' }}" required><br>
                          <label for="">Guardian's Name (*)</label>
                          <input type="text" class="form-control" name="guardian_name" placeholder="Enter Guardian Name"  value="{{ old('guardian_name')?old('guardian_name'): '' }}" required><br>
                        </div>
                        <div class="col-md-6">
                          <label for="">Student's CNIC (*)</label>
                          <input type="text" class="form-control" name="student_cnic" id="cnic" maxlength="15" placeholder="Enter student's CNIC" value="{{ old('student_cnic')?old('student_cnic'): '' }}" required ><br>
                          <label for="">Father's CNIC (*)</label>
                          <input type="text" class="form-control" name="father_cnic"  id="father_cnic" maxlength="15" placeholder="Enter Father CNIC"  value="{{ old('father_cnic')?old('father_cnic'): '' }}" required><br>
                          <label for="">Guardian's CNIC (*)</label>
                          <input type="text" class="form-control" name="guardian_cnic" id="guardian_cnic" maxlength="15" placeholder="Enter Guardian CNIC"  value="{{ old('guardian_cnic')?old('guardian_cnic'): '' }}" required><br>
                        </div>
                    </div>
                    <!-------Personal Information End------>

                    <hr>
                    <!-------Gender Information start------>
                
                    <div class="row "><br>
                        
                          <div class="col-md-4">
                            <label for="">Gender: (*)</label>
                            <select name="gender" id="mstatus" class="form-control col-md-12" required>
                                <option value="Male"  selected="{{ old('mstatus') ??old('mstatus')=='Male'?'selected': '' }}" >Male</option>
                                <option value="Female"  {{ old('mstatus') ??old('mstatus')=='Female'?'selected': '' }}">Female</option>
                            </select>
                          </div>
                          
                            <div class="col-md-4">
                              
                              <label for="">Martial Status (*)</label>
                              <select name="martial_status" id="mstatus" class="form-control col-md-12" required>
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
                          <select name="domicile_province" id="mstatus" class="form-control col-md-6" required>
                                <option value="">Select Province</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Sindh">Sindh</option>
                                <option value="Balochistan">Balochistan</option>
                                <option value="KPK">KPK</option>
                                <option value="Gilgit">Gilgit Baltistan</option>
                                <option value="AJ&K">Azad Jammu & Kashmir</option>
                              </select>
                         <br>
                        
                        </div>
                        <div class="col-md-6">
                          <label for="">District (*)</label>
                          <input type="text" class="form-control col-md-6" name="domicile_district" placeholder="Enter District"   value="{{ old('domicile_district')?old('domicile_district'): '' }}" required><br>
                        
                        </div>
                    </div>
                    <!-------Domicile Information End------>
                  <hr>

                  <!-------Dob Information Start------>
                  <div class="row "><br>
                        
                        <div class="col-md-3">
                          <label for=""> Date of Birth (*)</label>
                          <input type="date" class="form-control" name="date_of_birth" placeholder="Enter Date of Birth" value="{{ old('date_of_birth')?old('date_of_birth'): '' }}" required><br>
                        
                        </div>
                        <div class="col-md-3">
                          <label for=""> Place of Birth (*)</label>
                          <input type="text" class="form-control" name="place_of_birth" placeholder="Enter Place of Birth" value="{{ old('place_of_birth')?old('place_of_birth'): '' }}" required><br>
                        
                        </div>
                        <div class="col-md-3">
                          <label for="">Nationality1 (*)</label>
                          <input type="text" class="form-control" name="nationality1" placeholder="Enter Nationality1" value="{{ old('nationality1')?old('nationality1'): '' }}" required><br>
                        
                        </div>
                        <div class="col-md-3">
                          <label for="">Nationality2</label>
                          <input type="text" class="form-control" name="nationality2" placeholder="Enter Nationality2" value="{{ old('nationality2')?old('nationality2'): '' }}"><br>
                        
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
                          <textarea name="present_address" id="present_address" cols="119" rows="2" class="col-md-12" required > {{ old('present_address')?old('present_address'): '' }}</textarea>
                        </div>
                    </div>
                    <!-------Current Address Information End------>

                    <hr>
                    <!-------Tel (Res) (*)  Information start------>
                  
                    <div class="row "><br>
                        
                        <div class="col-md-6">
                          <label for="">Tel (Res) (*) </label>
                          <input type="text" class="form-control" name="present_tel" id="present_tel" maxlength="11" placeholder="Enter Residentialial Telephone " value="{{ old('present_tel')?old('present_tel'): '' }}" required><br>
                        
                        </div>
                        <div class="col-md-6">
                          <label for="">Mobile Phone (*)</label>
                          <input type="text" class="form-control" name="present_mobile" id="present_mobile" maxlength="12" placeholder="Enter Mobile Phone" value="{{ old('present_mobile')?old('present_mobile'): '' }}"  required><br>
                        
                        </div>
                    </div>
                    <!-------Tel (Res) (*)  Information End------>
            <hr>
                      <!-------paddress Information start------>
                  
                      
            <!-------Permanant Address Information start------>
            <div class="col-md-12">
            <input type="checkbox" name="paramtoo" onclick="FillParam(this.form)">
                        <em>Check this box if Present Address and Permanent Address are the same.</em>
                      <h3>Permanent Address of Applicant :(*)</h3>

                    </div>
                    <div class="row "><br>
                        
                    
                        <div class="col-md-12">
                          <textarea name="permanent_address" id="permanent_address" cols="119" rows="2" class="col-md-12" >{{ old('permanent_address')?old('permanent_address'): '' }} </textarea>
                        </div>
                    </div>
                    <!-------Current Address Information End------>


                    <hr>
                    <!-------Tel (Res) (*)  Information start------>
                  
                    <div class="row "><br>
                        
                        <div class="col-md-6">
                          <label for="">Tel (Res)  </label>
                          <input type="text" class="form-control" name="perm_tel" id="perm_tel"  maxlength="11"  placeholder="Enter Residentialial Telephone "  value="{{ old('perm_tel')?old('perm_tel'): '' }}" ><br>
                        
                        </div>
                        <div class="col-md-6">
                          <label for="">Mobile Phone </label>
                          <input type="text" class="form-control" name="perm_mobile" id="perm_mobile"  maxlength="12"  placeholder="Enter Mobile Phone"  value="{{ old('perm_mobile')?old('perm_mobile'): '' }}" ><br>
                        
                        </div>
                    </div>
                    <!-------Tel (Res) (*)  Information End------>
                <hr>

                      <div class="row">
                          <div class="col-md-6">
                            <label for="">Student Email: {{Auth::user()->email}}</label>
                            <input type="hidden" name="student_email" id="" value="{{Auth::user()->email}}" class="form-control" placeholder="Enter Email">
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
                          <input type="text" class="form-control" name="father_occupation" placeholder="Enter Father's/Guardian's Occupation"  value="{{ old('father_occupation')?old('father_occupation'): '' }}" ><br>
                          
                        </div>
                        <div class="col-md-6">
                          <label for="">Father's/Guardian's Business Address</label>
                          <input type="text" class="form-control" name="fbusiness_address" placeholder="Enter Father's/Guardian's Business Address"   value="{{ old('fbusiness_address')?old('fbusiness_address'): '' }}"><br>
                          
                        </div>
                    </div>
                    <div class="row "><br>
                        
                        <div class="col-md-4">
                          <label for="">Tel (Res) </label>
                          <input type="text" class="form-control" name="father_tel" id="father_tel" placeholder="Enter Residentialial Telephone " maxlength="11"  value="{{ old('father_tel')?old('father_tel'): '' }}" ><br>
                        
                        </div>
                        <div class="col-md-4">
                          <label for="">Mobile Phone </label>
                          <input type="text" class="form-control" name="father_mobile" id="father_mobile" placeholder="Enter Mobile Phone"  maxlength="12"  value="{{ old('father_mobile')?old('father_mobile'): '' }}"><br>
                        
                        </div>
                        <div class="col-md-4">
                        <label for="">Email Address</label>
                            <input type="email" name="father_email" id="" class="form-control" placeholder="Enter Email"   value="{{ old('father_email')?old('father_email'): '' }}">
                        
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
                          <input type="text" class="form-control" name="applicant_designation" placeholder="Enter Applicant's Designation"  value="{{ old('applicant_designation')?old('applicant_designation'): '' }}"><br>
                          
                        </div>
                        <div class="col-md-6">
                          <label for="">Name of the Organization</label>
                          <input type="text" class="form-control" name="organisation_name" placeholder="Enter Name of the Organization"  value="{{ old('organisation_name')?old('organisation_name'): '' }}"><br>
                          
                        </div>
                    </div>
                    <div class="row "><br>
                        
                        <div class="col-md-4">
                          <label for="">Disability (if any) </label>
                          <input type="text" class="form-control" name="disability" placeholder="Enter Disability " value="{{ old('disability')?old('disability'): '' }}" ><br>
                        
                        </div>
                        <div class="col-md-8">
                          <label for="">Special arrangements  for the admission test and to attend classes at the campus</label>
                          <input type="text" class="form-control" name="special_arrangement" placeholder="Enter Special arrangements  for the admission"  value="{{ old('special_arrangement')?old('special_arrangement'): '' }}"><br>
                        
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
                          <input type="text" class="form-control" name="emergency_name" placeholder="Enter Name" value="{{ old('emergency_name')?old('emergency_name'): '' }}"><br>
                          <label for="">Telephone No:</label>
                          <input type="text" class="form-control" name="em_telephone" id="em_telephone" placeholder="Enter Telephone No"  maxlength="11" value="{{ old('em_telephone')?old('em_telephone'): '' }}"><br>
                          
                        </div>
                        <div class="col-md-6">
                          <label for="">Relationship with the Applicant</label>
                          <input type="text" class="form-control" name="relation_applicant" placeholder="Enter Relationship with the Applicant" value="{{ old('relation_applicant')?old('relation_applicant'): '' }}"><br>
                          <label for="">Mobile No:</label>
                          <input type="text" class="form-control" name="em_mobile" id="em_mobile" placeholder="Enter Mobile No" maxlength="12" value="{{ old('em_mobile')?old('em_mobile'): '' }}"><br>
                          
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <label for="">Address</label>
                          <input type="text" class="form-control" name="em_address" placeholder="Enter Address" value="{{ old('em_address')?old('em_address'): '' }}"><br>
                          
                        </div>
                    </div>
                    <!-------Emergency Case Information: End------>



                  
                        <hr>
                        <div class="row">
                            <div class="col-md-12 btn">
                              <input type="submit" value="Save" Onclick="personal_info(event)" class="form-control buttn btn-success" >
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

        <script>
            function FillParam(f) {
              if(f.paramtoo.checked == true) {
                f.permanent_address.value = f.present_address.value;
                f.perm_tel.value = f.present_tel.value;
                f.perm_mobile.value = f.present_mobile.value;

                
              }
            }
        </script>


      <script src="js/script.js"></script>
  </body>
</html>