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
  
</head>
<body>

    <div class="container">
        <div class="row ">
                @include('header')
            <div class="col-md-12" >
                <div class="contai55ner">
                    <div class="row justify-content-center">
                            
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" style="background-color:#303283; color:white;text-align:center">{{ __('Register for Online Admission at Iqra Univesity Islamabad ') }}</div>

                                <div class="card-body" style="background-color:white; color:black">
                                    
                                    <div class="row">
                                        <div class="col-md-7">
                                            <form method="POST" action="{{ route('register') }}">
                                                @csrf

                                                    <div class="form-group row">
                                                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                                        <div class="col-md-6">
                                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                                @error('name')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                                @error('password')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                                            <div class="col-md-6">
                                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row mb-0">
                                                            <div class="col-md-10 offset-md-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    {{ __('Register') }}
                                                                </button>
                                                            </div>
                                                        </div>
                                                </form>
                                        </div>
                                        <div class="col-md-5">
                                            <h2>Instructions</h2>
                                            <ul>
                                                <li>For admission enquiries email us at: <strong> admissions@iqraisb.edu.pk</strong></li>
                                                <li>Candidate Email will be used as username</li>
                                                <li>Please Enter Valid Email Address</li>
                                                <li>Enquiries will be entertained by registered email or cell no.</li>
                                            </ul>
                                        </div>
                                    </div>        
                                          
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
          
                @include('footer')
        </div>
   </div>
</body>
</html>