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


<!-------- Login Model Form------>
<div class="col-md-12">


    <form class="col-md-12" >
    @csrf
    <div class="col-md-12">
                    <h2 class="col-ms-12">IUIC Online Application form </h2> 
                    </div>
            <div class="col-md-12">
                <div class="row">
                        
                    <div class="col-md-6">
                        User ID <input type="" name="student_id" id="" value="{{Auth::user()->id}}">
                    </div>
                </div>
                
            </div>
            
        <hr>
            <!-------Personal Information start------>
        
            <div class="row "><br>

                    
        
                <div class="col-md-6">
            
                <table>
                <tr>
                    <td>Id</td>
                    <td>First Name</td>
                    <td>Last Name</td>
                    <td>City Name</td>
                    <td>Email</td>
                    </tr>
                    <tr>
                        <td>{{User>student_name}}</td>
                        <td>{{User->student_cnic}}</td>
                        <td>{{User->father_name}}</td>
                        <td>{{User->father_cnic}}</td>
                        <td>{{User->guardian_name}}</td>
                        <td>{{User->guardian_cnic}}</td>
                        <td>{{User->gender}}</td>
                        <td>{{User->martial_status}}</td>
                
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>

                </table>
            
            

                </div>
                
                <div class="col-md-6">
                
                </div>
            </div>
            <!-------Personal Information End------>

    <hr>
            
        </form>



        <!-------Login Model Form End------>
    </div>




            <!--------Footer start------->
        @include("footer")
</body>
</html>