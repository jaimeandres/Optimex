<!DOCTYPE html>
<html lang="es" ng-app="Optimex">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Optimex</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="{{URL::to('/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::to('/css/app.css')}}">
	<link rel="stylesheet" href="{{URL::to('/css/theme.css')}}">
	<!-- Latest compiled and minified CSS -->


	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	@yield('head')

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
@if(env('APP_DEBUG',false))

@else
<body oncontextmenu="return false" onkeydown="return true">
	@endif
	<body>
		<nav class="navbar navbar-default optimex-navbar">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle Navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						@if(!Auth::guest())
						<li><a href="{{URL::to('/')}}">Inicio</a></li>
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
							<ul class="nav navbar-nav navbar-right">
								@if (Auth::guest())
								
								@else
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Hola, {{ Auth::user()->name }} <span class="caret"></span></a>
									<ul class="dropdown-menu" role="menu">
										<li>
								<a href="{{ url('/inicio/logout') }}"
										onclick="event.preventDefault();
										 document.getElementById('logout-form').submit();">
											Salir
								</a>

							 <form id="logout-form" action="{{ url('/inicio/logout') }}" method="POST" style="display: none;">
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

				<br><br>


				<footer>
					<div class="container">
						<hr>
						<p>&copy; Optimex {{Date('Y')}}. Todos los derechos reservados. <span style="float:right;">Versión 0.1.0</span></p>
					</div>
				</footer>

				<!-- Scripts -->
				<script src="{{URL::to('/js/jquery.js')}}"></script>
				<script src="{{URL::to('/js/bootstrap.min.js')}}"></script>
				@yield('scripts')
			</body>
			</html>
