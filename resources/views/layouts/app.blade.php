<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Optimex</title>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    <!--link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}"-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    @yield('head')
</head>
<body oncontextmenu="return false" onkeydown="return true">
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @if(!Auth::guest())
                            <li><a href="{{URL::to('/inicio')}}">Inicio</a></li>
                            @if(Auth::user()->rol == 99)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestión<span class="caret"></a>
                                    <ul class="dropdown-menu" role="menu">                                  
                                        <li><a href="{{URL::to('/usuarios')}}">Usuarios</a></li>
                                        <li><a href="{{URL::to('/productos')}}">Productos</a></li>
                                        <li><a href="{{URL::to('/relacion')}}">Relacionar</a></li>
                                    </ul>
                                </li>
                            @endif
                            
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Administrativos<span class="caret"></a>
                                    <ul class="dropdown-menu" role="menu">
                                        @if(Auth::user()->rol == 99 || Auth::user()->rol == 2)
                                            <li><a href="{{URL::to('/inventario')}}">Ingreso Inventarios</a></li>
                                            <li><a href="{{URL::to('/consolidado')}}">Ver Estrategias</a></li>
                                        @endif
                                        <li><a href="{{URL::to('/historico')}}">Ver Historicos</a></li>
                                    </ul>
                                </li>
                            
                            @if(Auth::user()->rol == 99 || Auth::user()->rol == 1)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gerentes de Producto<span class="caret"></a>
                                    <ul class="dropdown-menu" role="menu">                                  
                                        <li><a href="{{URL::to('/estrategia')}}">Ingreso de Estrategías</a></li>
                                    </ul>
                                </li>
                            @endif
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <!--li><a href="{{ route('register') }}">Register</a></li-->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    Hola, {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="fondo">
            <ul>
                <li><img src="Imagenes/Capsulas.jpg" align="left" height="98" width="130"></li>
                <li><span>Optimex</span></li>
            </ul>
        </div>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>
</html>
