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
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/landing/css/style.css')}}" />
    </head>

    <body>

        <!--Navbar Start-->
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
            <div class="container-fluid">
                <!-- LOGO -->
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
        <!--<section class="bg-home bg-gradient" id="home">
            <div class="home-center">
                <div class="home-desc-center">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="home-title mo-mb-20">
                                    <h1 class="mb-4 text-white">Bienvenidos a InvestigaUCAB</h1>
                                    <p class="text-white-50 home-desc mb-5">InvestigaUCAB es una plataformta que te ayudara a crear tus proyectos de investigacion , a evaluar su efectividad y muchas cosas mas!!!</p>
                                </div>
                            </div>
                            <div class="col-xl-4 offset-xl-2 col-lg-5 offset-lg-1 col-md-7">
                                <div class="home-img position-relative">
                                    <img src="{{ URL::asset('assets/landing/images/investigacion.svg')}}" alt="" class="home-first-img">
                                    <img src="{{ URL::asset('assets/landing/images/investigacion.svg')}}" alt="" class="home-second-img mx-auto d-block">
                                    <img src="{{ URL::asset('assets/landing/images/investigacion.svg')}}" alt="" class="home-third-img">
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
        </section>
         home end --->



        <!-- contact start -->
        <section class="section pb-0 bg-gradient" id="contact">
            <div class="bg-shape">
                <img src="images/bg-shape-light.png" alt="" class="img-fluid mx-auto d-block">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title text-center mb-4">
                            <h3 class="text-white">Tienes alguna duda ?</h3>
                            <p class="text-white-50">Por Favor llena nuestro formulario y te responderemos lo mas pronto posible!</p>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                <div class="row mb-4">
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-email-outline text-info h2"></i>
                            </div>
                            <div class="contact-details text-white">
                                <h5 class="text-white">E-mail</h5>
                                <p class="text-white-50">ejemplo@abc.com</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-cellphone-iphone text-info h2"></i>
                            </div>
                            <div class="contact-details">
                                <h5 class="text-white">Telefono</h5>
                                <p class="text-white-50">+58-000-0000</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-lg-4">
                        <div class="contact-content text-center mt-4">
                            <div class="contact-icon mb-2">
                                <i class="mdi mdi-map-marker text-info h2"></i>
                            </div>
                            <div class="contact-details">
                                <h5 class="text-white">Direccion</h5>
                                <p class="text-white-50">Av. ejemplo calle ejemplo, ejemplo</p>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <div class="custom-form p-5 bg-white">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Nombre Evento</label>
                                            <input name="nombre" id="name" type="text" class="form-control" placeholder="Ingresa el nombre del equipo...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">host</label>
                                            <input name="nombre" id="name" type="text" class="form-control" placeholder="Ingresa el nombre del responsable del evento...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">deporte</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Ingresa tu nombre...">
                                                {!! Form::Label('item', 'deporte') !!}
                                                {!! Form::select('nom_dep', $seleccion, null, ['class' => 'cities']) !!}                
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">fecha</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Indica la fecha del evento...">
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Tipo torneo</label>
                                            <input name="name" id="name" type="text" class="form-control" placeholder="Ingresa tu nombre...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">descripcion</label>
                                            <input name="email" id="email" type="email" class="form-control" placeholder="Ingresa tu correo...">
                                        </div>
                                    </div>
                                </div>
                                <!--end row-->

                                <!--<div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">Asunto</label>
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Ingresar Asunto...">
                                        </div>
                                    </div>
                                </div>-->
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="comments">descripcion</label>
                                            <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="ingrese otros detalles del..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div  class="row">
                                    <div  class="col-lg-12 text-right">
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="Enviar Mensaje">
                                        <div id="simple-msg"></div>
                                    </div>
                                </div>
                                <!-- end row -->
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
