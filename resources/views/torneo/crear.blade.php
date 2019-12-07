<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Cancha Ucab</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ URL::asset('assets/landing/images/logo-ucab-icono.png')}}">

        <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/landing/css/bootstrap.min.css')}}" type="text/css">

        <!--Material Icon -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/landing/css/materialdesignicons.min.css')}}" />

        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/landing/css/style.css')
        }}" />


        <style>
        .little {
          
          color: black;
          padding: 8px 20px;
          margin: 6px 14px;
          width: 20%;
          opacity: 0.8;
            }
        
        
        .cities {
          background-color: #F7F4F9;
          color: black;
          padding: 8px 20px;
          margin: 6px 14px;
          width: 97%;
          opacity: 0.8;
            }
        }
        </style>
    </head>



    <body>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container-fluid">
                <a class="logo text-uppercase" href="index.html">
                    <!--
                    <img src="{{ URL::asset('assets/landing/images/logo-light-large.png')}}" alt="" class="logo-light" height="60" />
                    <img src="{{ URL::asset('assets/landing/images/logo-dark-large.png')}}" alt="" class="logo-dark" height="60" />
                    -->
                    <h1>Cancha UCAB</h1>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                        <li class="nav-item active">
                            <a href="#home" class="nav-link">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contacto</a>
                        </li>
                    </ul>
                    <a href="{{route('login')}}" class="btn btn-info navbar-btn">Ingresar</a>
                </div>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- home start -->
        <section class="bg-home bg-gradient" id="home">
            
        </section>
        <!-- home end --->


                <div class="container">
                <div class="row justify-content-center">
                    <div  class="col-lg-10">

                        <div class="custom-form p-5 bg-white">
                            <div id="message"></div>
                            <form action="" method="post">
                                <div class="row">
                                    <div  class="col-lg-7">
                                        <div  class="form-group">
                                            <label for="name" >Primer partido</label>
                                            
                                            
                                            <label for="name" class="form-control"><input type="radio" name="choice1" value="".{{$emparejamiento[0]}}>{{$emparejamiento[0]}}</label>
                                        </div>
                                    </div>

                                </div>
                                    <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                        
                                        <label for="name" class="form-control"><input type="radio" name="choice1" value="".{{$emparejamiento[1]}}>{{$emparejamiento[1]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                
                                <!-- end row -->
                                <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="name">Segundo partido</label>
                                            
                                            <label for="name" class="form-control"><input type="radio" name="choice2" value="".{{$emparejamiento[2]}}>{{$emparejamiento[2]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                        
                                            <label for="name" class="form-control"><input type="radio" name="choice2" value="".{{$emparejamiento[3]}}>{{$emparejamiento[3]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="name">Tercer partido</label>
                                            
                                            <label for="name" class="form-control"><input type="radio" name="choice3" value="".{{$emparejamiento[4]}}>{{$emparejamiento[4]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                        
                                        <label for="name" class="form-control"><input type="radio" name="choice3" value="".{{$emparejamiento[5]}}>{{$emparejamiento[5]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="name">Cuarto partido</label>
                                            
                                            <label for="name" class="form-control"><input type="radio" name="choice4" value="".{{$emparejamiento[6]}}>{{$emparejamiento[6]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                        
                                        <label for="name" class="form-control"><input type="radio" name="choice4" value="".{{$emparejamiento[7]}}>{{$emparejamiento[7]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="name">Quinto partido</label>
                                            
                                            <label for="name" class="form-control"><input type="radio" name="choice5" value="".{{$emparejamiento[8]}}>{{$emparejamiento[8]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                        
                                        <label for="name" class="form-control"><input type="radio" name="choice5" value="".{{$emparejamiento[9]}}>{{$emparejamiento[9]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="name">Sexto partido</label>
                                            
                                            <label for="name" class="form-control"><input type="radio" name="choice6" value="".{{$emparejamiento[10]}}>{{$emparejamiento[10]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                        
                                        <label for="name" class="form-control"><input type="radio" name="choice6" value="".{{$emparejamiento[11]}}>{{$emparejamiento[11]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="name">Septimo partido</label>
                                            
                                            <label for="name" class="form-control"><input type="radio" name="choice7" value="".{{$emparejamiento[12]}}>{{$emparejamiento[12]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                        
                                        <label for="name" class="form-control"><input type="radio" name="choice7" value="".{{$emparejamiento[13]}}>{{$emparejamiento[13]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <br>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <label for="name">Octavo partido</label>
                                            
                                            <label for="name" class="form-control"><input type="radio" name="choice8" value="".{{$emparejamiento[14]}}>{{$emparejamiento[14]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="col-lg-7 text-righ">
                                        <div class="form-group">
                                        
                                        <label for="name" class="form-control"><input type="radio" name="choice8" value="".{{$emparejamiento[15]}}>{{$emparejamiento[15]}}</label>
                                        </div>
                                    </div>
                                    </div>
                                    <div  class="row">
                                    <div  class="col-lg-7 text-right">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="Enviar resultados">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                        <!-- end custom-form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </section>
        <!-- contact end -->
    

    <section class="section bg-gradient">
        <div class="container-fluid">
        </div>
    </section>


        <!-- Back to top -->    
        <a href="#" class="back-to-top" id="back-to-top"> <i class="mdi mdi-chevron-up"> </i> </a>

        <!-- javascript -->
        <script src="{{ URL::asset('assets/landing/js/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('assets/landing/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ URL::asset('assets/landing/js/jquery.easing.min.js')}}"></script>
        <script src="{{ URL::asset('assets/landing/js/scrollspy.min.js')}}"></script>

        <!-- custom js -->
        <script src="{{ URL::asset('assets/landing/js/app.js')}}"></script>
    </body>
</html>