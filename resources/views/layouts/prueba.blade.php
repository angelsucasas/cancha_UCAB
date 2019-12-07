<!DOCTYPE html>

 <title>Cancha UCAB</title>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
           <!-- Bootstrap core CSS -->
        <link rel="stylesheet" href="{{ URL::asset('assets/landing/css/bootstrap.min.css')}}" type="text/css">
      
      
        <!-- Custom  sCss -->
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/landing/css/style.css')}}" />
        <link href="{{ asset('css/horario.css') }}" rel="stylesheet">
        <link href="{{ asset('css/sucasas.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        
      
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            
    
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    


<!------ Include the above in your HEAD tag ---------->
</head>
<style>
    .posicionamiento-69{
        margin-bottom: -90px;
        margin-top: -80px;
        margin-left: 475px
}
    .posicionamiento-70{
        margin-bottom: -20px;
        margin-top: -20px
}


    .ajuste-1{
        padding-top: 21px;
        padding-left: 10px;
    }

</style>



<body>
<div class="w3-sidebar w3-bar-block w3-dark-grey w3-animate-left" style="display:none width:50%" id="mySidebar">
  <button class="w3-bar-item w3-button w3-large"
  onclick="w3_close()">Cerrar &times;</button>
  <div class="w3-dropdown-hover">
        @guest
                            @if (Route::has('register'))
                            @endif
                        @else

        <a  class="w3-bar-item "><h4><i class="fas fa-user-circle"></i>{{ Auth::user()->name }}</h4></a>
      
        @endguest
        <hr>
        
        <img src="{{URL::asset('assets/app/images/equipos.jpg')}}"  class="posicionamiento-70" alt="Snow" style="width:100%">
      
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="/equipo/crear" class="w3-bar-item w3-button">Registrar equipo</a>
        <a href="/equipo/eliminar" class="w3-bar-item w3-button">Eliminar equipo</a>
    
      </div>
    </div>
    <hr>
    <hr>
    <div class="w3-dropdown-hover">
    <img src="{{URL::asset('assets/app/images/visualizarE.jpg')}}"  class="posicionamiento-70" alt="Snow" style="width:100%">
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="/equipo/index" class="w3-bar-item w3-button">Ver mis equipo</a>
        <a href="/equipo/todos" class="w3-bar-item w3-button">Ver todos los equipos</a>  
      </div>
    </div>
    <hr>
    <hr>
    <div class="w3-dropdown-hover">
    <img src="{{URL::asset('assets/app/images/eventos.jpg')}}"  class="posicionamiento-70" alt="Snow" style="width:100%">
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="/evento/crear" class="w3-bar-item w3-button">Registrar evento</a>
        <a href="/" class="w3-bar-item w3-button">ingresar a un evento</a>    
        <a href="/evento/index" class="w3-bar-item w3-button">Ver todos los eventos</a> 
      </div>
    </div>
    <hr>
    <hr>
    <div class="w3-dropdown-hover">
    <img src="{{URL::asset('assets/app/images/gimnasio.jpg')}}"  class="posicionamiento-70" alt="Snow" style="width:100%">
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="/gimnasio/registrar" class="w3-bar-item w3-button">Registrarse al gimnasio</a>
        <a href="/gimnasio/index" class="w3-bar-item w3-button">Usuarios del gimnasio</a>    
        <a href="/gimnasio/d" class="w3-bar-item w3-button">Eliminar suscripcion</a>         
      </div>
    </div>
    <hr>
    <hr>
    <div class="w3-dropdown-hover">
    <img src="{{URL::asset('assets/app/images/torneo.jpg')}}"  class="posicionamiento-70" alt="Snow" style="width:100%">
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="/torneo/iniciar" class="w3-bar-item w3-button">Iniciar Torneo</a>      
      </div>
    </div>
     <hr> 
     <hr>
    <div class="w3-dropdown-hover">
     <img src="{{URL::asset('assets/app/images/ucab.jpg')}}"  class="posicionamiento-70" alt="Snow" style="width:100%"></a>    
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="/solicitud/ini" class="w3-bar-item w3-button">Hacer una solicitud de integrante(s)</a> 
        <a href="/solicitud/todas" class="w3-bar-item w3-button">Ver todas las solicitudes</a>   
        <a href="/solicitud/mis/solicitudes" class="w3-bar-item w3-button">Aceptar solicitantes</a>      
      </div>
    </div>   
    <hr>
    <hr>
    <div class="w3-dropdown-hover">
     <img src="{{URL::asset('assets/app/images/colina.jpg')}}"  class="posicionamiento-70" alt="Snow" style="width:100%"></a>    
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="/colina/registro" class="w3-bar-item w3-button">Rey de la colina</a>      
      </div>
    </div>  
    <hr> 
    <hr>
    <div class="w3-dropdown-hover">
     <img src="{{URL::asset('assets/app/images/clasificacion.jpg')}}"  class="posicionamiento-70" alt="Snow" style="width:100%"></a>    
    <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="/clasificacion/index" class="w3-bar-item w3-button">Ver las clasificaciones</a>      
      </div>
    </div> 
    <hr>
        <a href="/cerrar" class="w3-bar-item w3-button">Cerrar sesion</a>

</div>


  <button class="w3-button w3-white w3-xxlarge" onclick="w3_open()">&#9776;</button>
  <a class="logo text-uppercase" href="/dashboard">
                    <img src="{{URL::asset('assets/app/images/ucab2.png')}}" class="posicionamiento-69"  height="160" width="250" />
  </a>

<script>
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

 @if(isset($men))  
<div align="right" class="container">
    <div  class="alert alert-warning alert-dismissible fade show" role="alert">
        {{$men}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
</div>
@endif  

 <div class="bg-home degradado" id="home" style="min-height: 500px">
            <div class="home-center posicionamiento-3">
                <div class="home-desc-center">
                    <div class="container-fluid ">
                        
                        <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <div class="custom-form p-5 bg-white ">
                            <div id="message"></div>
                            <main class="py-4">
                                    @yield('content')
                            </main>
                        </div>
                        <!-- end custom-form -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
                    </div>
                    <!-- end container-fluid -->
                </div>
            </div>
        </div>

        



     
        <script src="{{ URL::asset('assets/landing/js/bootstrap.bundle.min.js')}}"></script>
       

    <!-- javascript -->
    <script src="{{ URL::asset('assets/landing/js/app.js')}}"></script>
    <script src="{{ URL::asset('assets/landing/js/jquery.min.js')}}"></script>
    <script src="{{ asset('js/loadTable.js') }}" defer></script>
 

</body>

</html>