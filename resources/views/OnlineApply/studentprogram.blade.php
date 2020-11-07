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
        <h2 class="col-ms-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Progam's Info   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Form No : &nbsp;{{Auth::user()->id}} </h2> 
      <hr>
        <!-------Iqra Graduates/Ex-Students: start------>
        <div class="col-md-12">
            <div class="row">
                  <div class="col-md-6">
                          <h3>Iqra Graduate/Ex-Student:</h3>
                          <input type="hidden" name="student_id" class="hidden" value="{{Auth::user()->id}}"> 
                </div>
                
            </div>
           
        </div>
        <div class="row "><br>
            
            <div class="col-md-3">
              <label for="" style="text-align:left;">Campus</label>
              <input type="text" class="form-control" name="campus"  ><br>
             
            </div>
            <div class="col-md-3">
              <label for="">Registration no</label>
              <input type="text" class="form-control" name="registration_no"  ><br>
              
            </div>
            <div class="col-md-3">
              <label for="">Program</label>
              <input type="text" class="form-control" name="pre_program" ><br>
             
            </div>
            <div class="col-md-3">
             
              <label for="">Reason for leaving</label>
              <input type="text" class="form-control" name="reason_leaving"  ><br>
             
            </div>
        </div>
        <!-------Iqra Graduates/Ex-Students: End------>


      <hr>
        <!-------Transfer Applicant: start------>
        <div class="col-md-12">
          <h3>Transfer Applicant:</h3>
        </div>
        <div class="row ">
            <div class="col-md-3">
              <label for="" style="text-align:left;">Institution Attended</label>
              <input type="text" class="form-control" name="institution_attended" >
              
            </div>
            <div class="col-md-3">
            <label for="">Program</label>
              <input type="text" class="form-control" name="program"  >
            
             
              
            </div>
            <div class="col-md-3">
            <label for="" style="text-align:left;">CGPA</label>
              <input type="text" class="form-control" name="cgpa"  >
             
            </div>
            <div class="col-md-3">
            <label for="">Credit Hours Completed</label>
              <input type="text" class="form-control" name="credit_hours" >
              
             
            </div>
        </div>
        <!-------Transfer Applicant: End------>

        <hr>
        <!-------Result Awaiting Applicant start------>
        <div class="col-md-12">
          <h3>Result Awaiting Applicant:</h3>
        </div>
        <div class="row "><br>
            
            <div class="col-md-3">
              <label for="" style="text-align:left;">Awaiting Result of</label>
              
              <select name="awaiting_result" class="form-control" id="">
                  <option value="">--Select--</option>
                  <option value="Intermediate">Intermediate</option>
                  <option value="Graduation">Graduation</option>
                  <option value="Master">Master</option>
              </select>
              
            </div>
            <div class="col-md-3">
            <label for="">Board/University</label>
              <input type="text" class="form-control" name="board_university"  >
              
             
            </div>
            <div class="col-md-3">
              <label for="">Roll Number</label>
              <input type="text" class="form-control" name="roll_number"  >
             
             
            </div>
            <div class="col-md-3">
              
              <label for="">Year</label>
              <input type="text" class="form-control" name="year" >
             
            </div>
            
        </div>
        <!-------Result Awaiting Applicant End------>
<hr>

        <!-------Disciplinary Issues (in Previous Institution: End------>
     

        <!-------How did you come to know about Iqra University Islamabd Campus? start------>
        <div class="col-md-12">
           <h3>How did you come to know about Iqra University Islamabd Campus?</h3>
        </div>

        <div class="row "><br>
        
            <div class="col-md-6">
            
                  <select name="how_did_come" id="" class="form-control" required>
                    <option value="">--Select Source--</option>
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
        </div>
        <div class="row "><br>
            
            <div class="col-md-5">
              <select name="student_status" id="" class="form-control" required>
                <option value="">--Select Status--</option>
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
            <h2 >Select Program:</h2>
        </div>
        
        <div class="col-md-12">
          @foreach($semesters as $semester)
            <input type="hidden" name="semester" class="hidden" value="{{$semester->id}}"> 
          @endforeach
                <h4 >**Applicant can apply for 3 different Programs** </h4>
                * Program 1.
                <select name="program1" id="select4" class="col-md-6" style="padding:10px" required>
                <option value="">--Select Program--</option>
                    @foreach($programs as $program)

                      <option value="{{$program->id}}">{{$program->name}}</option>
                            
                    
                    @endforeach
                </select>
        </div>
        <div class="col-md-12"><br>
               
                Program 2.&nbsp;&nbsp;
                <select name="program2" id="select4"  class="col-md-6" style="padding:10px" >
                
                    @include('OnlineApply.programs')
                </select>
        </div>
        <div class="col-md-12">
                <br>
                Program 3.&nbsp;&nbsp;
                <select name="program3" id="select4" class="col-md-6" style="padding:10px">
               
                @include('OnlineApply.programs')
                </select>
        </div>
      </div>
<hr>
             <div class="row">
                <div class="col-md-12 btn">
                  <input type="submit" value="Save" class="form-control buttn btn-success" >
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