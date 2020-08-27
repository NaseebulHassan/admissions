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


<div class="container">
 <!--------Content start------->
<div class="row">
     <!--------Header  start------->
    
     @include("header2")

<!-------- Login Model Form------>
            <div class="col-md-12">
         
                            <div class="col-md-12 home-left">
                                    <h3>Congratulations You have successfully Applied</h3>
                                    <h3>If any query regarding admissions Please Contact at <br>
                                       Email:  admissions@iqraisb.edu.pk
                                     </h3>

                                        
                                    <form method="post" action="{{url('voucher')}}" >
                                    @csrf
                                            <input type="hidden" name="formno" value="{{Auth::user()->id}}">
                                             <input type="submit" id="" class="form-control buttn btn-success" value="Print Processing Fee Voucher">
                                    </form>
                                 
                                      
                                  
                            </div>
                        
            
                            
                                
                         


                  
                </div>


                @include("footer")

            <!--------Footer start------->
        

 </div>
    
</div>    
</body>
</html>