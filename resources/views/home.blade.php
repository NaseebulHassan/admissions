
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
   

 <!--------Content start------->

 <div class="container">
 @include("header2")
 <!--------Content start------->
@if(count($errors)>0)
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>

    @endforeach
    </div>
@endif
        <div class="ffssrm">
                <!--
            <!-------- Login Model Form------>
            <div class="col-md-12">


              <form class="col-md-12" id="basicinfo" method="POST" action="{{ url('studentinfo')}}">
                  @csrf
                    <h2 class="col-ms-12">Personal Details  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2> 
                  <hr>
                    <!-------Personal Information start------>
                  
                    <div class="col-md-12">
                        <div class="row">
                              
                            <div class="col-md-6">
                                  <div class="col-sm-4">
                                  <input type="hidden" name="student_id" id=""  value="{{Auth::user()->id}}">
                                      </div> 
                            </div>
                        </div>
                      
                    </div>
                    <div class="row "><br>
                    
                        <div class="col-md-3">
                          <label for="" style="text-align:left;">* Full Name </label>
                          <input type="text" class="form-control" name="student_name"  value="{{ old('student_name')?old('student_name'): '' }}" required>
                          <label for="">* Date of Birth</label>
                          <input type="date" class="form-control" name="date_of_birth"  value="{{ old('date_of_birth')?old('date_of_birth'): '' }}" required>
                          <label for="">* Domicile </label>
                          <select name="domicile_province" id="mstatus" class="form-control" required>
                                <option value="">--Select--</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Sindh">Sindh</option>
                                <option value="Balochistan">Balochistan</option>
                                <option value="KPK">KPK</option>
                                <option value="Gilgit">Gilgit Baltistan</option>
                                <option value="AJ&K">Azad Jammu & Kashmir</option>
                              </select>
                          
                              <label for="">* Telphone  </label>
                          <input type="text" class="form-control" name="present_tel" id="present_tel" maxlength="11"  value="{{ old('present_tel')?old('present_tel'): '' }}" required>
                          
                          
                        </div>
                        <div class="col-md-3">
                          <label for="">* Applicant NIC/Passport </label>
                          <input type="text" class="form-control" name="student_cnic" id="csdnic" maxlength="15"  value="{{ old('student_cnic')?old('student_cnic'): '' }}" required >
                          <label for="">* Place of Birth </label>
                          <input type="text" class="form-control" name="place_of_birth"  value="{{ old('place_of_birth')?old('place_of_birth'): '' }}" required>
                          <label for="">* District </label>
                          <input type="text" class="form-control " name="domicile_district"    value="{{ old('domicile_district')?old('domicile_district'): '' }}" required>
                          
                        </div>
                        <div class="col-md-3">
                        <label for="">* Gender</label>
                            <select name="gender" id="mstatus" class="form-control col-md-12" required>
                                <option value="">--Select--</option>
                                <option value="Male"  >Male</option>
                                <option value="Female"  >Female</option>
                            </select>
                           <label for="">* Nationality1 </label>
                            <select id="stdNationality" name="nationality1" value="{{ old('nationality1')?old('nationality1'): '' }}" class="form-control valid" aria-invalid="false">
                            @include("countrys");
                          </select>
                          <label for="">* Email </label>
                            <input type="text" name="student_email" id="" value="{{Auth::user()->email}}" class="form-control" >
                            
                        </div>
                        <div class="col-md-3">
                        <label for="">Martial Status (*)</label>
                              <select name="martial_status" id="mstatus" class="form-control col-md-12" required>
                                <option value="">--Select--</option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                              </select>
                              <label for="">Nationality2</label>
                          <select id="stdNationality" name="nationality2" value="{{ old('nationality1')?old('nationality1'): '' }}" class="form-control valid" aria-invalid="false">
                            @include("countrys");
                          </select>
                          <label for="">* Mobile Phone</label>
                          <input type="text" class="form-control" name="present_mobile" id="present_mobile" maxlength="12"  value="{{ old('present_mobile')?old('present_mobile'): '' }}"  required>
                        </div>
                    </div>
                    <!-------Personal Information End------>


                    <hr>
                  
                    <div class="row "><br>
                        
                        <div class="col-md-12">
                          <label for="">Present Address of Applicant</label>
                          <textarea name="present_address" id="present_address" cols="119" rows="2" class="col-md-12" required > {{ old('present_address')?old('present_address'): '' }}</textarea>
                        
                        <input type="checkbox" name="paramtoo" onclick="FillParam(this.form)">
                        <em>Check this box if Present Address and Permanent Address are the same.</em><br>
                      <label for="">Permanent Address of Applicant </label>
                      <textarea name="permanent_address" id="permanent_address" cols="119" rows="2" class="col-md-12" >{{ old('permanent_address')?old('permanent_address'): '' }} </textarea>
                      </div>
                    </div>

                      <hr>
                    <!-------Father's/Guardian's Information start------>
                   
                    <div class="row "><br>
                    
                    
                        <div class="col-md-3">
                    
                          <label for="">* Father Name </label>
                          <input type="text" class="form-control" name="father_name"   required>
                          
                          <label for="" >Father's Occupation</label>
                          <input type="text" class="form-control" name="father_occupation"   value="{{ old('father_occupation')?old('father_occupation'): '' }}" >
                        </div>    
                        <div class="col-md-3">
                        <label for="">* Father's NIC/Passport</label>
                          <input type="text" class="form-control" name="father_cnic"  id="father_cnic" maxlength="15"   value="{{ old('father_cnic')?old('father_cnic'): '' }}" required>
                          
                          <label for="">Business Address</label>
                          <input type="text" class="form-control" name="fbusiness_address"    value="{{ old('fbusiness_address')?old('fbusiness_address'): '' }}">
                        </div>
                        <div class="col-md-3">
                  
                        <label for="">* Guardian's Name</label>
                        <input type="text" class="form-control" name="guardian_name"   required>
                        <label for="">Telephone </label>
                          <input type="text" class="form-control" name="father_tel" id="father_tel"  maxlength="11"  value="{{ old('father_tel')?old('father_tel'): '' }}" >
                      </div>
                      <div class="col-md-3">
                      <label for="">* Guardian's NIC/Passport</label>
                          <input type="text" class="form-control" name="guardian_cnic" id="guardian_cnic" maxlength="15"   value="{{ old('guardian_cnic')?old('guardian_cnic'): '' }}" required>
                          <label for="">Mobile Phone </label>
                          <input type="text" class="form-control" name="father_mobile" id="father_mobile"  maxlength="12"  value="{{ old('father_mobile')?old('father_mobile'): '' }}"><br>
                        
                      </div>


                      </div>
                    <!-------Father's/Guardian's Information End------>

                    <hr>
                    <!-------Applicant's Information start------>
                  
                    <div class="row "><br>
                        
                        <div class="col-md-6">
                          <label for="" style="text-align:left;">Applicant's Designation (if employed)</label>
                          <input type="text" class="form-control" name="applicant_designation"   value="{{ old('applicant_designation')?old('applicant_designation'): '' }}"><br>
                          
                        </div>
                        <div class="col-md-6">
                          <label for="">Name of the Organization</label>
                          <input type="text" class="form-control" name="organisation_name"   value="{{ old('organisation_name')?old('organisation_name'): '' }}"><br>
                          
                        </div>
                    </div>
                    <div class="row "><br>
                        
                        <div class="col-md-4">
                          <label for="">Disability (if any) </label>
                          <input type="text" class="form-control" name="disability"  value="{{ old('disability')?old('disability'): '' }}" ><br>
                        
                        </div>
                        <div class="col-md-8">
                          <label for="">Special arrangements  for the admission test and to attend classes at the campus</label>
                          <input type="text" class="form-control" name="special_arrangement"   value="{{ old('special_arrangement')?old('special_arrangement'): '' }}"><br>
                        
                        </div>
                        
                    </div>

                    <!-------Applicant's Information End------>


                    <hr>
                    <!-------Emergency Case Information:start------>
                    
                      <h2>Emergency Contact</h2>
                
                    <div class="row ">
                        
                        <div class="col-md-3">
                          <label for="" style="text-align:left;">Name</label>
                          <input type="text" class="form-control" name="emergency_name"  value="{{ old('emergency_name')?old('emergency_name'): '' }}"><br>
                         
                        </div>
                        <div class="col-md-3">
                          <label for="">Relationship </label>
                          
                            <select name="relation_applicant" class="form-control" id="">
                              <option value="">--Select--</option>
                              <option value="Father">Father</option>
                              <option value="Mother">Mother</option>
                              <option value="Brother">Brother</option>
                              <option value="Sister">Sister</option>
                              <option value="Wife">Wife</option>
                              <option value="Son">Son</option>
                              <option value="Daughter">Daughter</option>
                              <option value="Mother in Law">Mother in Law</option>
                              <option value="Father in Law">Father in Law</option>
                              <option value="Friend">Friend</option>
                            </select>
                          
                        </div>
                        <div class="col-md-3">
                          
                          <label for="">Telephone No:</label>
                          <input type="text" class="form-control" name="em_telephone" id="em_telephone"  maxlength="11" value="{{ old('em_telephone')?old('em_telephone'): '' }}"><br>
                          
                        </div>
                        <div class="col-md-3">
                        <label for="">Mobile No:</label>
                          <input type="text" class="form-control" name="em_mobile" id="em_mobile"  maxlength="12" value="{{ old('em_mobile')?old('em_mobile'): '' }}"><br>
                          
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                          <label for="">Address</label>
                          <input type="text" class="form-control" name="em_address"  value="{{ old('em_address')?old('em_address'): '' }}"><br>
                          
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


  </body>
</html>