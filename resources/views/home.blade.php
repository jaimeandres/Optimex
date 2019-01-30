@extends('layouts.app')

<style>
	.quote {        
        font-size: 23px;
        color: #EC6C2F;
    }
    
</style>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">        	
        <div class="panel panel-default">
			<div class="panel-body">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox" height="1100" width="2400">
					<div class="item active">
						<img class="img-responsive" height="1100" width="2400" src="{{asset('Imagenes/Gerentes.jpg')}}" alt="...">
						<div class="carousel-caption">

						</div>
					</div>
					<div class="item">
						<img class="img-responsive" height="1100" width="2400" src="{{asset('Imagenes/Industria.jpg')}}" alt="...">
						<div class="carousel-caption">

						</div>
					</div>
				    <div class="item">
						<img class="img-responsive" height="1100" width="2400" src="{{asset('Imagenes/Gerentecalculos.jpg')}}" alt="...">
						<div class="carousel-caption">

				    	</div>
				    </div>
					<div class="item">
						<img class="img-responsive" height="1100" width="2400" src="{{asset('Imagenes/Muestramedica.jpg')}}" alt="...">
						<div class="carousel-caption">

						</div>
					</div>
					<div class="item">
						<img class="img-responsive" height="1100" width="2400" src="{{asset('Imagenes/Pastillas.jpg')}}" alt="...">
						<div class="carousel-caption">

						</div>
					</div>
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Next</span>
			  </a>
			</div>
			</div>			
		</div>
		<div class="quote"><span>Para Optimizar la distribución de sus Muestras Médicas utilize Optimex</span></div>
        </div>
    </div>
</div>
@endsection