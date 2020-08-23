<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet"  href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <title>IUIC Online Admission</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
      
       
    </head>
    <body>
    
       
  <div class="container">
      

            <div class="row">
            @include('header')
     
                    <div class="col-md-12">
                             <marquee behavior="" direction="">
                               <h2>Admissions Open FALL-2020</h2>
                                
                               </marquee>
                    </div>
                        <div class="col-md-12">

                        <img src="images/Banner.png" alt="" height="650" width="100%"  >
                        </div>
                      
                  
                    @include('footer')
            </div>
            </div>
  
    </body>
</html>
