@extends('layouts.app')

@section('content')
<div class="container">
	<div class="card">
		<div class="table-responsive">			
			<h4>Usuarios registrados</h4>
			<a class="link_" href="{{URL::to('/register')}}"><button class="btn-add" style="float:right">Registar</button></a>
			@if (Session::has('mensaje'))
				<div class="alert alert-success">{{Session::get('mensaje', '')}}</div>
	        @endif
	        @if (Session::has('warning'))
	        	<div class="alert alert-warning">{{Session::get('warning', '')}}</div>
	        @endif
			<table class="table table-bordered">
				<col width="50%">
              	<col width="50%">
				<thead>
					<th>Nombre</th>
					<th>Correo</th>
				</thead>
				@foreach($usuarios as $usuario)
					<tr>
						<td>{{ $usuario->name }}</td>
						<td>{{ $usuario->email }}</td>
					</tr>
				@endforeach
			</table>
		</div>
	</div>
</div>
@endsection