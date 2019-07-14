<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Ingresar - InvestigaUCAB</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::asset('assets/app/images/logo-ucab-icono.png')}}">

        <!-- App css -->
        <link href="{{URL::asset('assets/app/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/app/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{URL::asset('assets/app/css/app.min.css')}}" rel="stylesheet" type="text/css" />

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <a href="index.html">
                                        <span><img src="{{URL::asset('assets/app/images/logo-dark-large.png')}}" alt="" height="50"></span>
                                    </a>
                                    <p class="text-muted mb-4 mt-3">Ingresa tu correo y tu contraseña para ingresar al panel administrativo.</p>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                @csrf
                                    <div class="form-group mb-3">
                                        <label for="emailaddress">Correo</label>
                                        <!--<input id="email" type="email" class="form-control" name="email" value="{ old('email') }" required autofocus placeholder="Ej: investigaucab@gmail.com">-->
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                @endif
                                    
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="password">Contraseña</label>
                                        <!--<input id="password" type="password" class="form-control" name="password" required placeholder="Ingresa contraseña">-->
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="current-password">
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="custom-control custom-checkbox">
                                           <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="checkbox-signin">Recordarme</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Ingresar
                                        {{ __('Login') }}
                                        </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="pages-recoverpw.html" class="text-white-50 ml-1">Olvidaste tu contraseña?</a></p>
                                <p class="text-white-50">No tienes cuenta? Crea una!<a href="{{route('register')}}" class="text-white ml-1"><b>Registrarse</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
        <!-- Vendor js -->
        <script src="{{URL::asset('assets/app/js/vendor.min.js')}}"></script>

        <!-- App js -->
        <script src="{{URL::asset('assets/app/js/app.min.js')}}"></script>
        
    </body>
</html>