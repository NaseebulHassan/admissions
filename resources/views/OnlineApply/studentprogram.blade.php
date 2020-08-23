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
    <title>IUIC-Admissions</title>
  
</head>
<body>

 <!--------Header  start------->

 <!--------Content start------->
 <div class="container">
 @if(count($errors)>0)
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>

    @endforeach
    </div>
@endif
 <!--------Content start------->
<div class="row">
     
    @include("header2")

  
<!-------- Login Model Form------>
<div class="col-md-12">


      <form class="col-md-12" method="POST"  action="{{url('storeprogram')}}">
      @csrf
        <h2 class="col-ms-12">IUIC Online Application form   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Step-2 </h2> 
      <hr>
        <!-------Iqra Graduates/Ex-Students: start------>
        <div class="col-md-12">
            <div class="row">
                  <div class="col-md-6">
                          <h3>Iqra Graduates/Ex-Students:</h3>
                </div>
                <div class="col-md-6">
                <div style="background-color:#2E2F81; padding:5px" class="col-sm-4">
                      Form No : &nbsp;{{Auth::user()->id}}
                      <input type="hidden" name="student_id" class="hidden" value="{{Auth::user()->id}}"> 
                          </div> 
                </div>
            </div>
           
        </div>
        <div class="row "><br>
            
            <div class="col-md-6">
              <label for="" style="text-align:left;">Campus</label>
              <input type="text" class="form-control" name="campus" placeholder="Enter Campus" ><br>
              <label for="">Registration no</label>
              <input type="text" class="form-control" name="registration_no" placeholder="Enter Registration no" ><br>
              
            </div>
            <div class="col-md-6">
              <label for="">Program</label>
              <input type="text" class="form-control" name="pre_program" placeholder="Enter Program" ><br>
              <label for="">Reason for leaving</label>
              <input type="text" class="form-control" name="reason_leaving" placeholder="Enter Reason for leaving" ><br>
             
            </div>
        </div>
        <!-------Iqra Graduates/Ex-Students: End------>


      <hr>
        <!-------Transfer Applicant: start------>
        <div class="col-md-12">
          <h3>Transfer Applicant:</h3>
        </div>
        <div class="row "><br>
        <div class="col-md-12">
              <label for="" style="text-align:left;">Institution Attended</label>
              <input type="text" class="form-control" name="institution_attended" placeholder="Enter Institution Attended" ><br>
              
            </div>
            <div class="col-md-6">
              <label for="" style="text-align:left;">CGPA</label>
              <input type="text" class="form-control" name="cgpa" placeholder="Enter CGPA" ><br>
              <label for="">Credit Hours Completed</label>
              <input type="text" class="form-control" name="credit_hours" placeholder="Enter Credit Hours Completed" ><br>
              
            </div>
            <div class="col-md-6">
              <label for="">Program</label>
              <input type="text" class="form-control" name="program" placeholder="Enter Program" ><br>
              <label for="">Reason for leaving</label>
              <input type="text" class="form-control" name="tr_reason_leaving" placeholder="Enter Reason for leaving" ><br>
             
            </div>
        </div>
        <!-------Transfer Applicant: End------>

        <hr>
        <!-------Result Awaiting Applicant start------>
        <div class="col-md-12">
          <h3>Result Awaiting Applicant:</h3>
        </div>
        <div class="row "><br>
            
            <div class="col-md-6">
              <label for="" style="text-align:left;">Awaiting Result of</label>
              <input type="text" class="form-control" name="awaiting_result" placeholder="Enter Awaiting Result of" ><br>
              <label for="">Board/University</label>
              <input type="text" class="form-control" name="board_university" placeholder="Enter Board/University" ><br>
              
            </div>
            <div class="col-md-6">
              <label for="">Roll Number</label>
              <input type="text" class="form-control" name="roll_number" placeholder="Enter Roll Number" ><br>
              <label for="">Year</label>
              <input type="text" class="form-control" name="year" placeholder="Enter Year" ><br>
             
            </div>
            <div class="col-md-12">
                <p>
                    
                    I assure that i will meet the minimum eligibility criteria of the program I am applying for admission in. I understand that my admission will be cancelled if I fail to submit the result/equivalence certificate with the required percentage/GPA within time.
                </p>
            </div>
        </div>
        <!-------Result Awaiting Applicant End------>
<hr>

 <!-------Disciplinary Issues (in Previous Institution: start------>
        <div class="col-md-12">
          <h3>Disciplinary Issues (in Previous Institution:</h3>
        </div>
        <div class="row "><br>
              
              <div class="col-md-12">
              <label for="">Involved in any disciplinary issue in previous institution</label>
              </div>
                 <div class="col-md-3">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Yes <input type="radio" name="disciplinary_issue" id="" value="yes" class="form-control">
                </div>
                <div class="col-md-3">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NO <input type="radio" name="disciplinary_issue" id="" value="no" class="form-control">
                </div>
              
             
              <div class="col-md-6">
                <label for="">If Yes, provide details</label>
                <input type="text" class="form-control" name="disciplinary_details" placeholder="Enter details" ><br>
              
              </div>
        </div>
        <!-------Disciplinary Issues (in Previous Institution: End------>
     

        <hr>
        <!-------How did you come to know about Iqra University Islamabd Campus? start------>
        <div class="col-md-12">
          <h3>How did you come to know about Iqra University Islamabd Campus?</h3>
        </div><br>
        <div class="row "><br>
        <div class="col-md-5">
              <select name="how_did_come" id="" class="form-control" required>
                <option value="">Select Source</option>
                <option value="Newspaper">Newspaper</option>
                <option value="Internet">Internet</option>
                <option value="Friends Relatives">Friends_Relatives</option>
                <option value="IQRA Students">IQRA Students</option>
                <option value="Other">Other</option>
              
              </select>
              
            </div>
            
           
        </div>
        <!-------How did you come to know about Iqra University Islamabd Campus? End------>
     

      <hr>
        <!-------Applicant's Status start------>
        <div class="col-md-12">
          <h3>Applicant's Status:</h3>
        </div><br>
        <div class="row "><br>
            
            <div class="col-md-5">
              <select name="student_status" id="" class="form-control" required>
                <option value="">Select Status</option>
                <option value="Fresh Applicant">Fresh_Applicant</option>
                <option value="Result Awaiting">Result Awaiting</option>
                <option value="IQRA Graduate">IQRA Graduate</option>
                <option value="IQRA Employee">IQRA Employee</option>
                <option value="Foreigner">Foreigner</option>
                <option value="Transfer from IQRA">Transfer from IQRA</option>
                <option value="Transfer from other universities">Transfer from other universities</option>
              </select>
              
            </div>
            
        </div>
        <!-------How did you come to know about Iqra University Islamabd Campus? End------>
      <hr>
      
<!---------------Applied Programm-------->
      
  <div class="row">
      <div class="col-md-12">
            <h3 style="background-color:#27297D;padding:10px;text-align:center">Applied Program:</h3>
        </div>
        
        <div class="col-md-12">
                <h4 style="background-color:#27297D;padding:5px">Select [ at least one ] Program in which you want to apply. **Student can apply for 3 different Programs** </h4>
                Program 1.
                <select name="program1" id="select4" class="col-md-6" style="padding:10px" required>
                @include("OnlineApply.programs")
                </select>
        </div>
        <div class="col-md-12">
               
                Program 2.
                <select name="program2" id="select4"  class="col-md-6" style="padding:10px" required>
                @include("OnlineApply.programs")
                </select>
        </div>
        <div class="col-md-12">
                
                Program 3.
                <select name="program3" id="select4" class="col-md-6" style="padding:10px">
                @include("OnlineApply.programs")
                </select>
        </div>
      </div>
<hr>
             <div class="row">
                <div class="col-md-12 btn">
                  <input type="submit" value="Save"  class="form-control buttn" style="background-color:#555555;color:white;">
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