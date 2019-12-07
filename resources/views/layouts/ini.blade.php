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
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        
        
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            
    
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css2">
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

    .propio{

        padding: 24px 68px;
    }
</style>



<body>
<div class="propio">
 <a class="logo text-uppercase" href="/dashboard">
                    <img src="{{URL::asset('assets/app/images/ucab2.png')}}" class="posicionamiento-69"  height="160" width="250" />
  </a>
</div>



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