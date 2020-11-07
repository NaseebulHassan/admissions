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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">

</head>
<body>


  <div class="row">
    @include('header3')
 
        <div class="col-md-12">
        <br>   

            <div class="uper">
                 @if(session()->get('success'))
               <div class="alert alert-success">
                   {{ session()->get('success') }}  
               </div><br />
               @endif
               <table id="dtMaterialDesignExample" class="table table-bordered table-primary" cellspacing="0" width="100%">
                    <thead class="thead-dark">
                        <tr>
                          <th class="th-sm">Form No</th>
                          <th class="th-sm">Name</th>
                          <th class="th-sm">Date</th>
                         
                          <th class="th-sm">Mobile</th>
                          <th class="th-sm">Student Email</th>

                          <th class="th-sm">Applied Degree</th>
                          <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                      @foreach($users as $user)
                      <tr>
                          <td>{{$user->formno}}</td>
                          <td>{{$user->student_name}}</td>
                          <td>{{$user->created_at}}</td>
                          <td>{{$user->present_mobile}}</td>
                          <td>{{$user->student_email}}</td>
                
                          <td>{{$user->code}}</td>
                      
                          <td><a href="/allviewdata/{{$user->formno}}" class="btn btn-primary">view</a>
                        
                      </tr>
               
                      @endforeach
                      
                    </tbody>

                    <tfoot>
                    <tr>
                    <th class="th-sm">Form No</th>
              
                          <th class="th-sm">Name</th>
                          <th class="th-sm">Date</th>
                         
                          <th class="th-sm">Mobile</th>
                          <th class="th-sm">Student Email</th>

                          <th class="th-sm">Applied Degree</th>
                          <th colspan="2">Action</th>
                    </tfoot>
                  
              </table>
           
            <div class="align-right" style="float:right"> {{$users->links()}}</div>
           <div>
         
        </div>
        
     
    </div>


</body>
</html>