
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet"  href="css/bootstrap.css">
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
   
    <title>IUIC-Admissions</title>


    <style>
      label{
        font-weight:bold;
      }
     
   </style>
</head>
<body>

 <!--------Header  start------->
<div class="container" style="border:1px solid;">
   
    @include('header3')
<div class="col-md-12">

<h2 class="col-ms-12" style="text-align:center">IUIC Online Application form   </h2> 
      <hr>
        <!-------Personal Information start------>
       
        
            <div class="row">
            
            <div class="col-md-12">
            <strong>Form No</strong>    : &nbsp;{{$basicinfos->student_id}}
                 </div>
                  
                   
            
            </div>
        <div class="row ">
                 <div class="col-md-12">
                    <h3>Personal Information:</h3>
                 </div>
                  <div class="col-md-6">
                      <label for="" style="text-align:left;">Student Name:</label>
                     &nbsp;&nbsp; {{$basicinfos->student_name}}
                      <br> 
                      <label for="">Father Name: </label>
                      &nbsp;&nbsp;{{$basicinfos->father_name}}

                      <br> 
                      <label for="">Guardian's Name:</label>
                      &nbsp;&nbsp; {{$basicinfos->guardian_name}}
                    <br> 
                  </div>
                  <div class="col-md-6">
                      <label for="">Student's CNIC:</label>
                      &nbsp;&nbsp;{{$basicinfos->student_cnic}}
                    <br>
                      <label for="">Father's CNIC:</label>
                      &nbsp;&nbsp; {{$basicinfos->father_cnic}}
                      <br>
                      <label for="">Guardian's CNIC:</label>
                      &nbsp;&nbsp; {{$basicinfos->guardian_cnic}}
                      <br>
                  </div>
        </div>
        <!-------Personal Information End------>
      
        <hr>

        <!-------Domicile Information start------>
       
        <div class="row"><br>
            
        <div class="col-md-12">
        <h3>Domicile:</h3>
        </div>
       
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
              <label for="">Nationality2 :</label>
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
          <label for="">Address  :</label>
             {{$basicinfos->present_address}}
        </div>
            <div class="col-md-6">
              <label for="">Tel (Res)  :</label>
              {{$basicinfos->present_tel}}
            <br>
            
            </div>
            <div class="col-md-6">
              <label for="">Mobile Phone :</label>
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
          <label for="">Address  </label>
          {{$basicinfos->permanent_address}}
        </div>
        
            <div class="col-md-6">
              <label for="">Tel (Res) : </label>
              {{$basicinfos->perm_tel}}
              <br>
            
            </div>
            <div class="col-md-6">
              <label for="">Mobile Phone  :</label>
              {{$basicinfos->perm_mobile}}
             <br>
            
            </div>
        </div>
        <!-------Tel (Res) (*)  Information End------>
<hr>

          <div class="row">
              <div class="col-md-6">
                <label for="">Student Email Address :</label>
                {{$basicinfos->student_email}}
                
              </div>
          </div>



          <hr>
        <!-------Father's/Guardian's Information start------>
        
        <div class="row "><br>
          <div class="col-md-12">
            <h3>Father's/Guardian's Information:</h3>
          
          </div>
            <div class="col-md-6">
              <label for="" style="text-align:left;">Father's/Guardian's Occupation :</label>
              {{$basicinfos->father_occupation}}
              <br>
              
            </div>
            <div class="col-md-6">
              <label for="">Father's/Guardian's Business Address :</label>
              {{$basicinfos->fbusiness_address}}
              <br>
              
            </div>
        </div>
        <div class="row "><br>
            
            <div class="col-md-4">
              <label for="">Tel (Res) :</label>
              {{$basicinfos->father_tel}}
              <br>
            
            </div>
            <div class="col-md-4">
              <label for="">Mobile Phone :</label>
              {{$basicinfos->father_mobile}}
              <br>
            
            </div>
            <div class="col-md-4">
            <label for=""> Email Address :</label>
            {{$basicinfos->father_email}}
                  
            </div>
        </div>

        <!-------Father's/Guardian's Information End------>

        <hr>
        <!-------Applicant's Information start------>
      
        <div class="row "><br>
          <div class="col-md-12">
            <h3>Applicant's Information:</h3>
          </div>
            <div class="col-md-6">
              <label for="" style="text-align:left;">Applicant's Designation (if employed) :</label>
              {{$basicinfos->applicant_designation}}
              
            </div>
            <div class="col-md-6">
              <label for="">Name of the Organization:</label>
              {{$basicinfos->organisation_name}}
             <br>
              
            </div>
        </div>
        <div class="row "><br>
            
            <div class="col-md-4">
              <label for="">Disability (if any): </label>
              {{$basicinfos->disability}}
             <br>
            
            </div>
            <div class="col-md-8">
              <label for="">Special arrangements required for the admission test and to attend classes at the campus :</label>
              {{$basicinfos->special_arrangement}}
              <br>
            
            </div>
            
        </div>

        <!-------Applicant's Information End------>


        <hr>
        <!-------Emergency Case Information:start------>
        
        <div class="row "><br>
            <div class="col-md-12">
              <h3>Emergency Case Information:</h3>
            </div>
            <div class="col-md-6">
              <label for="" style="text-align:left;">Name:</label>
              {{$basicinfos->emergency_name}}
              <br>
              <label for="">Telephone No(s):</label>
              {{$basicinfos->em_telephone}}
             <br>
              
            </div>
            <div class="col-md-6">
              <label for="">Relationship with the Applicant:</label>
              {{$basicinfos->relation_applicant}}
             <br>
              <label for="">Mobile No:</label>
              {{$basicinfos->em_mobile}}
              <br>
              
            </div>
        </div>
        <div class="row">
           <div class="col-md-12">
              <label for="">Address :</label>
              {{$basicinfos->em_address}}
              <br>
              
            </div>
        </div>
        <!-------Emergency Case Information: End------>

      <br><br><br><br><br><br><br><br><br>
          
       <h3>Acdemice Record:</h3>
        <table class="table">
          <thead>
            <TR>
              <th>Qualification</th>
              <th>Board_university</th>
              <th>Year</th>
              <th>Division</th>
              <th>Grade</th>
              <th>Obtain_marks</th>
              <th>Total_marks</th>
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
 
            <div class="row">
              <div class="col-md-12">
                 <h3>Iqra Graduates/Ex-Students:</h3>
              </div>
                <div class="col-md-6">
                      
                      <label for="" style="text-align:left;">Campus :</label>
                      {{$programs->campus}}<br>
                      <label for="">Registration no :</label>
                      {{$programs->registration_no}}<br>
                </div>
                <div class="col-md-6">
                      <label for="">Program :</label>
                      {{$programs->pre_program}}<br>
                      <label for="">Reason for leaving :</label>
                      {{$programs->reason_leaving}}
                </div>
            </div>
           
      <hr>
        <div class="row ">
              <div class="col-md-12">
                <h3>Transfer Applicant:</h3>
              </div>
                <div class="col-md-6">
                <label for="" style="text-align:left;">Institution Attended :</label>
                  {{$programs->institution_attended}}<br>
                  <label for="" style="text-align:left;">CGPA :</label>
                  {{$programs->cgpa}}<br>
                  
                </div>
                <div class="col-md-6">
                  <label for="">Program</label>
                  {{$programs->program}}<br>
                  <label for="">Credit Hours Completed :</label>
                  {{$programs->credit_hours}}<br>
                
                </div>
                <div class="col-md-12">
                
                <label for="">Reason for leaving :</label>
                  {{$programs->tr_reason_leaving}}<br>
                  
                </div>
        </div>
      
<hr>
      
        <div class="row "><br>  
            <div class="col-md-12">
                      <h3>Result Awaiting Applicant:</h3>
                    </div>
                <div class="col-md-6">
                  <label for="" style="text-align:left;">Awaiting Result of :</label>
                  {{$programs->awaiting_result}}<br>
              
                  <label for="">Board/University :</label>
                  {{$programs->board_university}}<br>
                
                  
                </div>
                <div class="col-md-6">
                  <label for="">Roll Number :</label>
                  {{$programs->roll_number}}<br>

                  <label for="">Year :</label>
                  {{$programs->year}}<br>
              
                </div>
                
        </div>
        <!-------Result Awaiting Applicant End------>
  <hr>   
     
        <div class="row "><br>
            <div class="col-md-12">
              <h3>Disciplinary Issues (in Previous Institution:</h3>
            </div>
            <div class="col-md-6">
              <label for="">Involved in any disciplinary issue in previous institution :</label>
               {{$programs->disciplinary_issue}}<br>
               </div>
            <div class="col-md-6">
              <label for="">If Yes, provide details :</label>
              {{$programs->disciplinary_details}}<br>
             
            </div>
        </div>
        <!-------Disciplinary Issues (in Previous Institution: End------>
     

        <hr>
        <div class="row ">
              <div class="col-md-12">
                <h3>How did you come to know about Iqra University Islamabd Campus? :</h3><br>
                {{$programs->how_did_come}}<br>
              </div>
          </div>
           <!----me to know about Iqra University Islamabd Campus? End------>
      <hr>
          <div class="row ">
              <div class="col-md-12">
                <h3>Applicant's Status:</h3><br>
                {{$programs->student_status}}<br>
              </div>
          </div>
<hr>
      <div class="row">
          <div class="col-md-12">
                <h3>Applied Program:</h3>
            </div>
            
            <div class="col-md-6">
                   
                  <label for="">Program 1 :</label>
                  {{$programs->program1}}<br>
                  <label for="">Program 2 :</label>
                  {{$programs->program2}}<br>
                  
            </div>
            <div class="col-md-6">
            <label for="">Program 3 :</label>
                  {{$programs->program3}}<br>
                 
            </div>
            
      </div>
<hr>



  </div>

  </div>   


     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
  
  </body>
</html>