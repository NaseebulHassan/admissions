
        <h2 class="col-ms-12">IUIC Online Application form   </h2> 
      <hr>
        <!-------Personal Information start------>
       
        <div class="col-md-12 ">
            <div class="row">
            
                      Form No : &nbsp;{{$basicinfos->student_id}}
                   
            
            </div>
           
        </div>
        <div class="row personal_info">

        <h3>Personal Information:</h3>
                  <div class="col-md-6 names">
                      <label for="" style="text-align:left;">Name:</label>
                      {{$basicinfos->student_name}}
                      <br> <br>
                      <label for="">Father Name:</label>
                      {{$basicinfos->father_name}}

                      <br> <br>
                      <label for="">Guardian's Name:</label>
                      {{$basicinfos->guardian_name}}
                    <br> 
                  </div>
                  <div class="col-md-6 names">
                    <label for="">Student's CNIC:</label>
                    {{$basicinfos->student_cnic}}
                  <br> <br>
                    <label for="">Father's CNIC:</label>
                    {{$basicinfos->father_cnic}}
                    <br> <br>
                    <label for="">Guardian's CNIC:</label>
                    {{$basicinfos->guardian_cnic}}
                    <br>
                  </div>
        </div>
        <!-------Personal Information End------>

        <hr>

        <!-------Domicile Information start------>
       
        <div class="row personal_info"><br>
        <h3>Domicile:</h3>
            <div class="col-md-6">
              <label for="">Province:</label>
              {{$basicinfos->domicile_province}}
              <br>
            
            </div>
            <div class="col-md-6">
              <label for="">District:</label>
              {{$basicinfos->domicile_district}}
             <br>
            
            </div>
        </div>
        <!-------Domicile Information End------>
      <hr>

      <!-------Dob Information Start------>
      <div class="row "><br>
            
            <div class="col-md-3">
              <label for=""> Date of Birth :</label>
              {{$basicinfos->date_of_birth}}
              <br>
              <label for="">   Gender:</label>
              {{$basicinfos->gender}}
            </div>
            <div class="col-md-3">
              <label for=""> Place of Birth :</label>
              {{$basicinfos->place_of_birth}}
              <br>
              <label for="">Martial Status:</label>
              {{$basicinfos->martial_status}}
            </div>
            <div class="col-md-3">
              <label for="">Nationality1:</label>
              {{$basicinfos->nationality1}}
              <br>
            
            </div>
            <div class="col-md-3">
              <label for="">Nationality2</label>
              {{$basicinfos->nationality2}}
             <br>
            
            </div>
        </div>
        <!-------Dob Information End------>

    
      
        <!-------Current Address Information End------>

        <hr>
        <!-------Tel (Res) (*)  Information start------>
       
        <div class="row "><br>
        <div class="col-md-12">
          <h3>Present Address of Applicant :</h3>
          {{$basicinfos->present_address}}
        </div>
            <div class="col-md-6">
              <label for="">Tel (Res)  </label>
              {{$basicinfos->present_tel}}
            <br>
            
            </div>
            <div class="col-md-6">
              <label for="">Mobile Phone </label>
              {{$basicinfos->present_mobile}}
              <br>
            
            </div>
        </div>
   
 <!-------Permanant Address Information start------>
  

        <hr>
        <!-------Tel (Res) (*)  Information start------>
       
        <div class="row "><br>
        <div class="col-md-12">
          <h3>Permanant Address of Applicant :</h3>
          {{$basicinfos->permanent_address}}
        </div>
        
            <div class="col-md-6">
              <label for="">Tel (Res)  </label>
              {{$basicinfos->perm_tel}}
              <br>
            
            </div>
            <div class="col-md-6">
              <label for="">Mobile Phone </label>
              {{$basicinfos->perm_mobile}}
             <br>
            
            </div>
        </div>
        <!-------Tel (Res) (*)  Information End------>
<hr>

          <div class="row">
              <div class="col-md-6">
                <label for="">Email Address</label>
                {{$basicinfos->guardian_name}}
                
              </div>
          </div>



          <hr>
        <!-------Father's/Guardian's Information start------>
        <div class="col-md-12">
          <h3>Father's/Guardian's Information:</h3>
          {{$basicinfos->student_email}}
        </div>
        <div class="row "><br>
            
            <div class="col-md-6">
              <label for="" style="text-align:left;">Father's/Guardian's Occupation</label>
              {{$basicinfos->father_occupation}}
              <br>
              
            </div>
            <div class="col-md-6">
              <label for="">Father's/Guardian's Business Address</label>
              {{$basicinfos->fbusiness_address}}
              <br>
              
            </div>
        </div>
        <div class="row "><br>
            
            <div class="col-md-4">
              <label for="">Tel (Res) </label>
              {{$basicinfos->father_tel}}
              <br>
            
            </div>
            <div class="col-md-4">
              <label for="">Mobile Phone </label>
              {{$basicinfos->father_mobile}}
              <br>
            
            </div>
            <div class="col-md-4">
            <label for="">Email Address</label>
            {{$basicinfos->father_email}}
                  
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
           
              
            </div>
            <div class="col-md-6">
              <label for="">Name of the Organization</label>
              {{$basicinfos->guardian_name}}
             <br>
              
            </div>
        </div>
        <div class="row "><br>
            
            <div class="col-md-4">
              <label for="">Disability (if any) </label>
              {{$basicinfos->guardian_name}}
             <br>
            
            </div>
            <div class="col-md-8">
              <label for="">Special arrangements required for the admission test and to attend classes at the campus</label>
              {{$basicinfos->guardian_name}}
              <br>
            
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
              {{$basicinfos->guardian_name}}
              <br>
              <label for="">Telephone No(s)</label>
              {{$basicinfos->guardian_name}}
             <br>
              
            </div>
            <div class="col-md-6">
              <label for="">Relationship with the Applicant</label>
              {{$basicinfos->guardian_name}}
             <br>
              <label for="">Mobile No</label>
              {{$basicinfos->guardian_name}}
              <br>
              
            </div>
        </div>
        <div class="row">
           <div class="col-md-12">
              <label for="">Address</label>
              {{$basicinfos->guardian_name}}
              <br>
              
            </div>
        </div>
        <!-------Emergency Case Information: End------>


          
       <h3>Acdemice Record</h3>
        <table class="table">
          <thead>
            <TR>
              <th>qualification</th>
              <th>board_university</th>
              <th>Year</th>
              <th>division</th>
              <th>grade</th>
              <th>obtain_marks</th>
              <th>total_marks</th>
            </TR>
          </thead>
          <tbody>

          @foreach($academics as $row)
            <tr>
              <td>{{$row->qualification}}</td>
              <td>{{$row->board_university}}</td>
              <td>{{$row->year}}</td>
              <td>{{$row->division}}</td>
              <td>{{$row->grade}}</td>
              <td>{{$row->obtain_marks}}</td>
              <td>{{$row->total_marks}}</td>
             
              
            </tr>
          @endforeach
          </tbody>
        </table>
                
             
            

      
<hr>
             
     

