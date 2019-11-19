@extends('layouts.app')

@section('content')
<div class="content-wrapper">
<div id="fullscreen_bg" class="fullscreen_bg">
<body class="hold-transition login-page">
<center>
  <div class="login-box" style="transform: translateY(25%);">
  <div class="login-logo">
    <img src="../../img/FPS.png" style="width: 50%; -webkit-filter: invert(.8);
  filter: invert(100%);">
  </div>
 <!--/.col (left) -->
          <div class="container-fluid">
          <!-- right column -->
          <div class="col-md-">

            <!-- general form elements disabled -->
            <div class="card card-primary">

              <div class="card-header">
                <h3 class="card-title-center">Login</h3>
              </div>
                      <div class="card-body login-card-body-rounded">
                      <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <div class="input-group mb-2">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                 <div class="input-group-append">
                                         <div class="input-group-text">
                                             <span class="fas fa-envelope">
                                             </span>
                                         </div>
                                     </div>


                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                         <div class="form-group row">
                           <div class="input-group">
                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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
                        </div>

                            <div class="mb-2">
                                <div class="row">
                                 <div class="col-7">
                                  <div class="icheck-primary">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me?') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                            <div class="mb-2 pull-right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                       @if (Route::has('register.request'))
                                    <a class="btn btn-link" href="{{ route('register.request') }}">
                                        {{ __('I Dont Have an Account') }}
                                    </a>
                                @endif
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</center>
@endsection


  