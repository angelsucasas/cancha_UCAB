<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{URL::asset('assets/app/libs/jquery-vectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />

<!------ Include the above in your HEAD tag ---------->
</head>
<style>
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');
@media(min-width:768px) {
    body {
        margin-top: 50px;
    }
    /*html, body, #wrapper, #page-wrapper {height: 100%; overflow: hidden;}*/
}

.cities {
          background-color: #F7F4F9;
          color: black;
          padding: 12px 20px;
          margin: 6px 14px;
          width:60%;
          opacity: 0.8;
            }
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  opacity: 0.9;
}

#wrapper {
    padding-left: 0;    
}

#page-wrapper {
    width: 100%;        
    padding: 0;
    background-color: #fff;
}

@media(min-width:768px) {
    #wrapper {
        padding-left: 225px;
    }

    #page-wrapper {
        padding: 22px 10px;
    }
}

/* Top Navigation */

.top-nav {
    padding: 0 15px;
}

.top-nav>li {
    display: inline-block;
    float: left;
}

.top-nav>li>a {
    padding-top: 20px;
    padding-bottom: 20px;
    line-height: 20px;
    color: #fff;
}

.top-nav>li>a:hover,
.top-nav>li>a:focus,
.top-nav>.open>a,
.top-nav>.open>a:hover,
.top-nav>.open>a:focus {
    color: #fff;
    background-color: #1a242f;
}

.top-nav>.open>.dropdown-menu {
    float: left;
    position: absolute;
    margin-top: 0;
    /*border: 1px solid rgba(0,0,0,.15);*/
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: #fff;
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
}

.top-nav>.open>.dropdown-menu>li>a {
    white-space: normal;
}

/* Side Navigation */

@media(min-width:768px) {
    .side-nav {
        position: fixed;
        top: 60px;
        left: 225px;
        width: 225px;
        margin-left: -225px;
        border: none;
        border-radius: 0;
        border-top: 1px rgba(0,0,0,.5) solid;
        overflow-y: auto;
        background-color: #222;
        /*background-color: #5A6B7D;*/
        bottom: 0;
        overflow-x: hidden;
        padding-bottom: 40px;
    }

    .side-nav>li>a {
        width: 225px;
        border-bottom: 1px rgba(0,0,0,.3) solid;
    }

    .side-nav li a:hover,
    .side-nav li a:focus {
        outline: none;
        background-color: #1a242f !important;
    }
}

.side-nav>li>ul {
    padding: 0;
    border-bottom: 1px rgba(0,0,0,.3) solid;
}

.side-nav>li>ul>li>a {
    display: block;
    padding: 10px 15px 10px 38px;
    text-decoration: none;
    /*color: #999;*/
    color: #fff;    
}

.side-nav>li>ul>li>a:hover {
    color: #fff;
}

.navbar .nav > li > a > .label {
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  position: absolute;
  top: 14px;
  right: 6px;
  font-size: 10px;
  font-weight: normal;
  min-width: 15px;
  min-height: 15px;
  line-height: 1.0em;
  text-align: center;
  padding: 2px;
}

.navbar .nav > li > a:hover > .label {
  top: 10px;
}

.navbar-brand {
    padding: 5px 15px;
}

.img {
        max-width: 100%;
        max-height: 100%;
    }

    .portrait {
        height: 80px;
        width: 30px;
    }

    .landscape {
        height: 30px;
        width: 80px;
    }

    .square {
        height: 90px;
        width: 90px;
    }

    .propor1
    {
    height: 60px;
    width: 140px;
    margin: auto;
    display: block;
    }
.input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

.input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
  
</style>


<div id="throbber" style="display:none; min-height:120px;"></div>
<div id="noty-holder"></div>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div align="left"class="propor1">   
                        <img style='height: 100%; width: 160%; ' src="data:image/jpeg;base64,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"/>
                       
                </div> 
            
        </div>
        <!-- Top Menu Items -->
        <ul class="nav navbar-right top-nav">
            <li><a href="#" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Stats"><i class="fa fa-bar-chart-o"></i>
                </a>
            </li>            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin User <b class="fa fa-angle-down"></b></a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-fw fa-user"></i> Edit Profile</a></li>
                    <li><a href="#"><i class="fa fa-fw fa-cog"></i> Change Password</a></li>
                    <li class="divider"></li>
                    <li><a href="/cerrar"><i class="fa fa-fw fa-power-off"></i> Logout</a></li>
                </ul>
            </li>
        </ul>
        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li>
					<a href="/equipo/eliminar" title="eliminar equipo"><i class="fa fa-fw fa-search"></i> Eliminar equipo</a>
				</li>
				<li>
					<a href="/equipo/index" title="ver equipos"><i class="fa fa-fw fa-search"></i>Ver equipo</a>
				</li>
                <li>
                    <a href="/equipo/todos" title="ver todos los equipos en el sistema"><i class="fa fa-fw fa-search"></i>Ver todos los equipos</a>
                </li>
				<li>
					<a href="/equipo/crear" title="registrar equipo"><i class="fa fa-fw fa-paper-plane-o"></i>Registrar equipo</a>
				</li>
                
				
                <li>
                    <a href="/evento/crear"><i class="fa fa-fw fa-paper-plane-o"></i> Registrar evento </a>
                </li>
                <li>
                    <a href="/torneo/registro"><i class="fa fa-fw fa-paper-plane-o"></i> Comenzar un torneo </a>
                </li>
                <li>
                    <a href="/"><i class="fa fa-fw fa-paper-plane-o"></i> ingresar a un evento </a>
                </li>
                <li>
                    <a href="sugerencias"><i class="fa fa-fw fa-paper-plane-o"></i> MENU 4</a>
                </li>
                
                <li>
                    <a href="faq"><i class="fa fa-fw fa fa-question-circle"></i> MENU 5</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
    
    <main class="py-4">
            @yield('content')
    </main>

    


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     
    
        <script>
    		$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
               });
        </script>
        <!-- Vendor js -->
        <script src="{{URL::asset('assets/app/js/vendor.min.js')}}"></script>

        <script src="{{URL::asset('js/bootstrap.js')}}"></script>

        <!-- Plugins js-->
        <script src="{{URL::asset('assets/app/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
       
        
        <!-- App js-->
        <script src="{{URL::asset('assets/app/js/app.min.js')}}"></script>
         
</html>