<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="AutoHernandez de la Costa SAS, empresa dedicada a ofrecer servicios con calidad de agencia para las diferentes marcas en diagnóstico, mantenimiento y reparación de vehículos">
    <meta name="keywords" content="Autos,reparación,diesel,alineacion">
    <meta name="author" content="Carlos Ferrer Hernandez">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" href="{{asset ('img/logo_autohernandez.png')}}" />
    
    <!-- SITE TITLE -->
    <title>AutoHernandez de la Costa</title>            
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="{{asset ('bootstrap/css/bootstrap.min.css')}}" >       
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,600,500,700,800,900" rel="stylesheet" type="text/css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{asset ('fonts/font-awesome.min.css')}}">

    <!-- MAGNIFIC CSS -->
    <link rel="stylesheet" href="{{asset ('css/magnific-popup.css')}}">         
    <!-- component CSS -->  
    <link rel="stylesheet" href="{{asset ('css/aos.css')}}">            
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset ('css/style.css')}}">  
    
    <!-- Style APP-->
    <link rel="stylesheet" href="{{asset ('css/styleapp.css')}}"> 

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AutoHernandez') }}</title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
<body>
    <div id="app">
        <!-- START NAVBAR -->
        <div class="navbar navbar-default navbar-fixed-top menu-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="{{ url('/')}}" class="navbar-brand"><img id="logo" src="{{asset ('img/logo.png')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="navbar-collapse collapse">
                            <nav>
                                <ul class="nav navbar-nav navbar-right scrollable-menu">
                                    <li><a class="page-scroll" href=""></a></li>
                                    <li><a class="page-scroll" href="#process">INICIO</a></li>
                                </ul>
                            </nav>
                        </div>  
                    </div>
                </div> 
            </div><!--- END CONTAINER -->
        </div>  
        <!-- END NAVBAR -->

        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
         <!-- Latest compiled and minified Bootstrap -->
         <script src="{{asset ('bootstrap/js/bootstrap.min.js')}}"></script>
         
         <!-- modernizer JS -->     
         <script src="{{asset ('js/modernizr-2.8.3.min.js')}}"></script>                                                                        
         <!-- owl-carousel min js  -->
         <script src="{{asset ('owlcarousel/js/owl.carousel.min.js')}}"></script>

         <!-- magnific-popup js -->               
         <script src="{{asset ('js/jquery.magnific-popup.min.js')}}"></script>

         <!-- jquery mixitup js -->   
         <script src="{{asset ('js/jquery.mixitup.min.js')}}"></script>

         <!-- stellar js -->
         <script src="{{asset ('js/jquery.stellar.min.js')}}"></script>

         <!-- scrolltopcontrol js -->
         <script src="{{asset ('js/scrolltopcontrol.js')}}"></script>                                   
         <!-- aos js -->
         <script src="{{asset ('js/aos.js')}}"></script>
         <!-- ripples js -->    

         <!-- switcher js -->
         <script src="{{asset ('js/switcher.js')}}"></script>           
         
         <!-- scripts js -->
         <script src="{{asset ('js/scripts.js')}}"></script>
</html>
