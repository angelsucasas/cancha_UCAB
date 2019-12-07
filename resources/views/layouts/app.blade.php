<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Ucab Cancha</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/horario.css') }}" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css2">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <style>
    .cities {
          background-color: #F7F4F9;
          color: black;
          padding: 16px 20px;
          margin: 8px 16px;
          width: 90%;
          opacity: 0.8;
        }
       
        .cities {
          background-color: #F7F4F9;
          color: black;
          padding: 16px 20px;
          margin: 8px 16px;
          width: 90%;
          opacity: 0.8;
        }




 .left{
	width: 50px;
	height: 100%;
	background: #2f2f2f;
    white-space: nowrap; 
    transition: width 0.9s ;
    position: fixed;
    z-index: 9999; 
}
	.left ul{
		padding: 0;
		list-style-type: none;
		text-align: left;
	}
	.left li {
		width: auto;
		height: 60px;
		line-height: 50px;  
		padding-left: 18px;
	}
	.left li:hover {
		background: black; 
	}

	.left:hover {
        width: 250px; 
    }  

		.left .item-menu {
	        height:50px;
	        overflow:hidden;
	        color:#fff;
	    }  
	.left a{
		color: white;
	    text-decoration: none;
	    font-weight: bold;
	} 
	span.menu{
		padding-left: 17px;
	}
	.t_search {
	    color: black;
	    height: 35px;
	    margin-left: 15px;
	    width: 190px
	}

    .posicionamiento{
      
	    margin-left: -95px;
        margin-bottom: -8px;
	    margin-top: -10px

    }

    .posicionamiento-1{
        height: 190px;
	    width: 600px;
        margin-left: 80px;
        margin-top:  15px;
    }

    .posicionamiento-2{
        height: 190px;
	    width: 800px;

    }

    .diana{
        background: #12305D;
    }

  </style>
</head>
<body>
<div align="left" class="navbar-m2p">
	<div class="row">
		<div class="left ">
        <ul>
            
                <a href="/equipo/eliminar">
                <li class="item-menu navbar-m2p">
                    <span class="glyphicon glyphicon-pencil"></span> 
                    <span class="menu">Eliminar equipo</span>
                </li>
                </a> 
                <a href="/equipo/index">
                <li class="item-menu navbar-m2p">
                    <span class="glyphicon glyphicon-home"></span> 
                    <span class="menu">Ver equipo</span>
                </li>
                </a> 
                <a href="/equipo/todos">
                <li class="item-menu navbar-m2p">
                    <span class="glyphicon glyphicon-search"></span> 
                    <span class="menu">Ver todos los equipos</span>
                </li>
                </a> 
                <a href="/equipo/crear">
                <li class="item-menu navbar-m2p">
                    <span class="glyphicon glyphicon-book"></span> 
                    <span class="menu">Registrar equipo</span>
                </li>
                </a> 
                <a href="/evento/crear">
                <li class="item-menu navbar-m2p">
                    <span class="glyphicon glyphicon-book"></span> 
                    <span class="menu"> Registrar evento </span>
                </li>
                </a> 
                
				<a href="/torneo/registro">
                <li class="item-menu navbar-m2p">
                    <span class="glyphicon glyphicon-home"></span> 
                    <span class="menu"> Comenzar un torneo  </span>
                </li>
                </a> 
                <a href="/">
                <li class="item-menu navbar-m2p">
                    <span class="glyphicon glyphicon-home"></span> 
                    <span class="menu">ingresar a un evento</span>
                </li>
            </a> 
           
        </ul>
    </div>
</div>
</div>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <a class="logo text-uppercase" href="dashboard">
                    <img src="data:image/jpeg;base64,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
                    trG0QttfiQ4EDd1VGtm94o3VDGSyvkw9rIXR+mUc9TJEWNfNE5ggIZ23NAA2pvz3BDmxxwx4jsTjlpqWrqS056enmljbNGxoLmRucL5Hm4uBzCNbog8MW6LEgqfocjBLnfFtWvpnQBkR9dwkMhsQN/quva3O4anIqngxrmRSCSeapZGYom002xyyRvllkOzY8SEB7QxpzbuN7XvyT1sr3EIpWuZTqa58cGIuyxPmoNmA9oeYJXPY1wBZmu1wzb25j9U337k8jJx2WDa7MsVjpWSww2Y98r2jZvpZqS8d+25kr5XNc5rbnKASe7iksjslLZYU2VMYp5opqdgMBbVTvhbmglzRBsMkoJO17R+jtwHG/crN5LgLFjjT4cgJ6Z7Kimp8rHOqIquR0jaeaS2xMVg2Nr779rxJPDvTllaLYYYyCnwx7WyvLMzmNJY18UlGHuAJDS6QmwJsL8k1mdEZYFZVraQsbHtQ2Mvc1jhLDPAGOduAbKczHuzWFri993REczviOezxp0a7Wx5XELbHkYGiunQjKNKiYy7RycikVZI9TJMCDMZHDaUyOAChOWlF2DE8kkka3jmsymoqiSFsAmbGQNpcWJ/EPHwIVE5Rjwk3fwo7eHY9UbSVfG/Xh0KHzzQfcx+Jv8AzUN5Du/Yu8E/LH1f2LuF6yRXTMp4qH6SQ2aSdw7zZx5kD3o0Ysrpt+xXl2Z443pj26/Y26vijpopZ5bZImk9A5/ID3/wusOLDryV0+hn3KVyf8ZoXzvU7d3ofmQL9+960bvB8fY2rZZpco+r+xI1wwHcKIe5zf8AmjRg+PsPw0+0fV/YvUetGleC59K2JjSAcz+0/uY0Ekn9VNYMDTeqvmVTwzTS0J32b+qKdXrfp2utHRtt/iOvu/E3+Sju8C7v0RYtmn2ivVlc64Wfc4f4/EU1LEuWr2JrBk/T7kfPAz7nD/H4ie8x/q9g3GT9PoyPngZ9zh/j8RLXj/V7BuMn6fRhx65GtNxRwg+/4iHLH+r2GsOVeX0Y2j1swZw52H0jAO1mZAA42PBrg42Pehbl916Ems65aX6oKs1ywSHtUEEgbcN2zWSFt+Nrv7kv+L4+xJLN+lepXbrepw17G4dSNZK3LIwRRhkrbEZXAPs4bzx6o/4f1ewVn/T7j/ns4f0SKw5Dp3fSJ3i/V7EHjyvnp9zM4PrCwrEJGNqqdkUhGVkj2Nk3HlvHDwJ8E1CMvyPj2f8AKIS1QX41S7rj7cwNMtYNPh8hooKamnpwwZ2ujaYiSb8A4Ntfu4i/RDjGKWu7fYcNcm3japdXbv5GEq9dBmaGy0dLI0Oa8NkZmAe03a4Xk3EEXuo3h7P1RZpz94+jBm1y53Mc+jpXOicXxuc0kxuLS0uadpuOVxHgSneL4+qI7vN3j6MXUa32yOY59FSufGHiN5DszA+2YAiS4Byt8ghvC+/qiSjnXWPoxtLrdh7TZKGF7JBlkb2nB7d+4h0h3bzySvF8V6Bpz/pfqjZsNxjDsTjtTM2c0fabBI5z2tIG4xh24EeA7lZGCX4lxRVPJJ/hktL9n8maxiLCHkHjdbo8jDLmVVIiZJhVZlGsdYoCjNUT84CDDODTodpfjIw3D3OH9fUAsjHMNO4n38PDMeSzylxcnyXu+iOxsmB0o9Zey6v6FfUpog0QPxGrY2SWruIBK0OywXuZLHm9wv4Nb1WGTbds7iSSpcjbdO6+jwuglqTT05kts6dhij+kqHA5G8OAsXHuaUhnP9Suj7iZMQl3ucSIyQBme65Lv4k/tN6LSlphXWX+P9mLNPVP/rw/f/SK+tvGn1NRFhdLd7nSNY5rf7SZxy5fPd3AO5FJ1jhXWX+P9jww1TvpH/PX05fM6lorojS0NHDTbKKV8bPpZXxtc6WU73vuRe1ybdBYclnNhz/XhisMTIsNpoY/SKksfLsYm7QRZrRxtsL5nvHLk0j6wQBOg+pyMMZPil3vcA4UbHlrI+gle03c7uBA8UAdQoMCo6dobBS08LRyihjZ/Ib0AW/RIvs4/wADf0QB70SL7OP8Df0QAitNLBG6WbYRRMF3yShjGNHUkoA5Vjusd9bOKHA6Vsk0hLRVSxNsBzexjhuaOOZ+7+6bhAGf0b1U0cR2+IE4jWPOeV05JgDzxtGfW/avw3AcEAbvFhNMwBraeBrRuDWwxtAHcAEAMFDD9lF+7Z+iAJNHFw2UdumRv6IA5frn0Nom0ElfDFHT1ED4S4wtEbZ2vlbGQ5o3FwzAg8dyaAxmo/Rl08smLVPbtmhpc4BzPtlkm9wGQeL+5OcnJ2xRioqoqkdn2TfZb5BRGe2TfZb5BAHtk32W+QQAirw6CZpZLDDKwggsljY9pHQghAHBtPsFiwbGqV1FeKOoDJBC03ELjJkcG9GXs4DkQbbrAXYHU18eBTtEdWKXw4r9jOaXxgS5gLZw11ulxey3YuVHOzc7NfV5SXmlVmahoQM2DRiLtF7zljY0ve48GtAuSqskui5lkMCm9T5I0+SN+keNtgGYUkJJlIO6OnYbOFxzduYO9xPVZM0uOhcl7s7GzQqOpri/ZdD6BhiaxrWMAaxjQ1rWiwa0CwAHSyoNJwbT7En47jMdDAS6mpHmIZb5Xy3Alkv4gMHQBx5q3FDVLjyXFlWbJojw5vgvmdGx/EIcGw3skDZs2cVgAXSEdp9vf5loVq/HJyly6/RGOqSjHnyXz6v6mm6ktHXVE8uMVAvZz46UO33ed0kov7I7A8X9FnnNybbN8IKEVFdDreNYpFR001TMcsUEbpHdTbg0dSTYDvKiSOWapMIlxCsqMerBd0kkjaVp3ta71XO
                    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" alt="" class="posicionamiento"  height="140" width="250" />
                </a>
                <a><h1>
                    Cancha Ucab
                </h1>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Iniciar Sesion</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/cerrar"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="/cerrar" method="get" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>


   <!-- javascript -->
   <script src="{{ URL::asset('assets/landing/js/jquery.min.js')}}"></script>
        <script src="{{ URL::asset('assets/landing/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ URL::asset('assets/landing/js/jquery.easing.min.js')}}"></script>
        <script src="{{ URL::asset('assets/landing/js/scrollspy.min.js')}}"></script>

        <!-- custom js -->
        <script src="{{ URL::asset('assets/landing/js/app.js')}}"></script>
        <script src="{{ asset('js/loadTable.js') }}" defer></script>
    <script src="{{ asset('js/loadTable.js') }}" defer></script>

</body>
</html>
