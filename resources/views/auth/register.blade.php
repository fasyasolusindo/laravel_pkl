@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div id="fullscreen_bg" class="fullscreen_bg">
<body class="hold-transition login-page">
<center>
  <div class="login-box" style="transform: translateY(18%);">
  <div class="login-logo">
    <img src="../../img/FPS.png" style="width: 50%; -webkit-filter: invert(.8);
  filter: invert(100%);">
  </div>
<div class="container">
          <div class="card">
               <h4><b><p class="register-box-msg text-primary">{{ __('Register') }}</p></b></h4>
                    <div class="card-body login-card-body-rounded">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="input-group mb-2">
                                <input id="name" type="text" placeholder="Nama" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            <div class="input-group-append">
                                 <div class="input-group-text">
                                    <span class="fas fa-user">
                                    </span>
                                 </div>
                            </div>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                          <div class="input-group">
                                <input id="id_member" placeholder="ID Member" type="text" class="form-control @error('id_member') is-invalid @enderror" name="id_member" value="{{ old('id_member') }}" required autocomplete="id_member" autofocus>
                                <div class="input-group-append">
                                        <div class="input-group-text">
                                             <span class="fas fa-id-card"></span>
                                          </div>
                                     </div>
                                 </div>


                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    

                        <div class="form-group row">
                            <div class="input-group">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    <div class="input-group-append">
                                      <div class="input-group-text">
                                        <span class="fas fa-envelope"></span>
                                      </div>
                                    </div>
                            </div>  
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                  

                        <div class="form-group row">
                            <div class="input-group">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                  <div class="input-group-append">
                                    <div class="input-group-text">
                                      <span class="fas fa-lock"></span>
                                    </div>
                                  </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
              

                        <div class="form-group row">
                            <div class="input-group">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                  <div class="input-group-append">
                                    <div class="input-group-text">
                                      <span class="fas fa-check-double"></span>
                                    </div>
                                  </div>
                            </div>
                          </div>
                  

                        <div class="form-group row mb-0">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
<br>
<br>
@endsection

 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Fasya Register</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../js/adminlte.min.js"></script>

<style type="text/css">
    .fullscreen_bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 50% 50%;
    background-repeat:repeat;
    background-image:
        linear-gradient(to bottom, rgb(6, 18, 20, 0.52), rgb(51, 133, 255, 0.6)),
        url('../../img/bg-login.jpg');
        
        background-size: cover;
    }

    .register-box-msg{
    transform: translateY(45%);
    }

    .card{
      opacity: 90%;
    }

    .login-box{
    transform: translateY(10%);
    }
</style>