<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Optimex</title>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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

                    <!-- Branding Image -->
                    <!--a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a-->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        @if(!Auth::guest())
                            <li><a href="{{URL::to('/inicio')}}">Inicio</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gestionar <span class="caret"></a>
                                <ul class="dropdown-menu" role="menu">                                  
                                    <li><a href="{{URL::to('/gestionar/tipo-habitacion')}}">Tipo de Habitación</a></li>                                 
                                    <li><a href="{{URL::to('/gestionar/habitacion')}}">Habitación</a></li>
                                    <li><a href="{{URL::to('/gestionar/reserva')}}">Reserva</a></li>
                                    <li><a href="{{URL::to('/gestionar/reserva')}}">Reserva</a></li>
                                    <li><a href="{{URL::to('silabos/carreras')}}">Sílabos por materia</a></li>
                                    <li><a href="{{URL::to('/gestionar/ingreso-logros-carrera')}}">Estándares de Logro</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes<span class="caret"></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{URL::to('/reportes/reportes-general-con-logros')}}">Estándares de logro Institucionales y de Carrera</a></li>
                                    <li><a href="{{URL::to('/reportes/reportes-carrera')}}">Resultados de aprendizaje de la Carrera vs Materias</a></li>
                                    <li><a href="{{URL::to('/reporte/rda-carreras')}}">Porcentajes de Materias vs RdA</a></li>
                                    <li><a href="{{URL::to('/mapeo')}}">Mapeos</a></li>
                                    <li><a href="{{URL::to('/reportes/rda-observaciones')}}">Observaciones de Sílabos</a></li>
                                    <li><a href="{{URL::to('/reportes/rda-observaciones-mapeo-general')}}">Observaciones del Mapeo General</a></li>
                                    <li><a href="{{URL::to('/reportes/rda-perfil-materias')}}">Resultados de aprendizaje Perfil de Carrera vs Materias</a></li>
                                    <li><a href="{{URL::to('/reportes/rda-perfil-materias-consolidado')}}">Nº de RDA de Asignatura por RDA Carrera</a></li>
                                    <li><a href="{{URL::to('/gestionar/silabosgraficos')}}">Malla gráfica</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{URL::to('/register')}}">Crear</a></li>
                                    <li><a href="{{URL::to('/usuarios/mostrar')}}">Administrar</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Parámetros <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{URL::to('/param/periodo')}}">Seleccionar Período</a></li>
                                    <li><a href="{{URL::to('/param/periodo/add')}}">Crear período</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
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

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
