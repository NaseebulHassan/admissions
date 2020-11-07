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
    @include("header2")

 <!--------Content start------->

 <div class="container">
 <!--------Content start------->
<div class="row">
@if(count($errors)>0)
    <div class="alert alert-danger">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>

    @endforeach
    </div>
@endif
<!-------- Login Model Form------>
<div class="col-md-12">
      <form  method="POST" action="{{route('formsubmitted')}}" class="col-md-12">
      @csrf
        <h2 class="col-ms-12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Academic Info   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Form No : &nbsp;{{Auth::user()->id}} </h2> 
      <hr>
    <hr>
       <div class="row">
            <div class="col-md-12">
              
                <div class="col-md-4">
                <div  class="col-sm-8">
                   
                      <input type="hidden" name="row[0][student_id]" class="hidden" value="{{Auth::user()->id}}"> 
                          </div> 
                </div>   <br>
             <table class="table table-bordered table-responsive" >
                <thead>
                    <tr>
                        <th>QUALIFICATION</th>
                        <th >BOARD/UNIVERSITY</th>
                        <th >YEAR</th>
                        <th >DIVISION</th>
                        <th >GRADE</th>
                        <th >Marks Obtained /GPA</th>
                        <th >Total Marks/GPA</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       
                        <td class="col-md-1">
                            <select  name="row[0][qualification]" class="form-control " required>
                                     @include("OnlineApply.firstlist")
                            </select>
                        </td>
                        <td>
                            <input type="text" name="row[0][board_university]" class="division form-control" required>
                            
                        </td>
                        <td class="col-md-1">
                            <input type="text" name="row[0][year]" class="year form-control" required>
                        </td>
                        <td >
                        
                            <select name="row[0][division]" class="year form-control" required>
                                <option value="">Choose</option>
                                <option value="1st">1st</option>
                                <option value="2nd">2nd</option>
                                <option value="3rd">3rd</option>
                            </select>
                        </td>
                        <td class="col-md-1">
                           
                            <select name="row[0][grade]" class="year form-control" required>
                                 <option value="">Choose</option>
                                <option value="A+">A+</option>
                                <option value="A">A</option>
                                <option value="B+">B+</option>
                                <option value="B">B</option>
                                <option value="C+">C+</option>
                                <option value="C">C</option>
                                <option value="D+">D+</option>
                                <option value="D">D</option>
                            </select>
                        </td>
                        <td>
                             <input type="text" name="row[0][obtain_marks]" class="year form-control" required>
                        </td>
                        <td>
                            <input type="text" name="row[0][total_marks]" class="year form-control" required>
                        </td>
                    </tr>
                    <tr>
                        
                        <td>
                            <select style="padding:5px" name="row[1][qualification]" class="form-control" required>
                                     @include("OnlineApply.secondlist")
                            </select>
                        </td>
                        <td>
                            <input type="text" name="row[1][board_university]" class="division form-control" required>
                        </td>
                        <td class="col-md-1">
                            <input type="text" name="row[1][year]" class="year form-control" required>
                        </td>
                        <td >
                        
                        <select name="row[1][division]" class="year form-control" required>
                            <option value="">Choose</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                        </select>
                    </td>
                    <td class="col-md-1">
                       
                        <select name="row[1][grade]" class="year form-control" required>
                             <option value="">Choose</option>
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D+">D+</option>
                            <option value="D">D</option>
                        </select>
                    </td>

                        <td>
                             <input type="text" name="row[1][obtain_marks]" class="year form-control" required>
                        </td>
                        <td>
                            <input type="text" name="row[1][total_marks]" class="year form-control" required>
                        </td>
                    </tr>
                    <tr>
                        
                        <td>
                            <select style="padding:5px" name="row[2][qualification]" class=" form-control">
                                @include("OnlineApply.thirdlist")

                            </select>
                        </td>
                        <td>
                            <input type="text" name="row[2][board_university]" class="division form-control">
                        </td>
                        <td class="col-md-1">
                            <input type="text" name="row[2][year]" class="year form-control">
                        </td>
                        <td >
                        
                        <select name="row[2][division]" class="year form-control">
                             <option value="">Choose</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                        </select>
                    </td>
                    <td class="col-md-1">
                       
                        <select name="row[2][grade]" class="year form-control">
                            <option value="">Choose</option>
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D+">D+</option>
                            <option value="D">D</option>
                        </select>
                    </td>

                        <td>
                             <input type="text" name="row[2][obtain_marks]" class="year form-control">
                        </td>
                        <td>
                            <input type="text" name="row[2][total_marks]" class="year form-control">
                        </td>
                    </tr>
                    <tr>
                        
                        <td>
                            <select style="padding:5px" name="row[3][qualification]" class=" form-control">
                                 @include("OnlineApply.fourthlist")
                            </select>
                        </td>
                        <td>
                            <input type="text" name="row[3][board_university]" class="division form-control">
                        </td>
                        <td class="col-md-1">
                            <input type="text" name="row[3][year]" class="year form-control">
                        </td>
                        <td >
                        
                        <select name="row[3][division]" class="year form-control" >
                            <option value="">Select</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                        </select>
                    </td>
                    <td class="col-md-1">
                       
                        <select name="row[3][grade]" class="year form-control"  >
                            <option value="">Choose</option>
                            <option value="A+">A+</option>
                            <option value="A">A</option>
                            <option value="B+">B+</option>
                            <option value="B">B</option>
                            <option value="C+">C+</option>
                            <option value="C">C</option>
                            <option value="D+">D+</option>
                            <option value="D">D</option>
                        </select>
                    </td>

                        <td>
                             <input type="text" name="row[3][obtain_marks]" class="year form-control">
                        </td>
                        <td>
                            <input type="text" name="row[3][total_marks]" class="year form-control">
                        </td>
                    </tr>
                   
                    
                </tbody>
             </table>
             
             </div>
       </div>
             <!-------User Information:: End------>
        <hr>
             <div class="row">
                <div class="col-md-12 btn">
                  <input type="submit" value="Save"  class="form-control buttn btn-success" >
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