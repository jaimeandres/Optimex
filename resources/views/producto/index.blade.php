@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading h-60">Productos
        <div class="panel-body">
          <a class="link_" href="{{URL::to('/productos/create')}}"><button class="btn btn-primary" style="float:right">Registar</button></a><br><br>
          @if (Session::has('mensaje'))
            <div class="alert alert-success">{{Session::get('mensaje', '')}}</div>
          @endif
          @if (Session::has('warning'))
            <div class="alert alert-warning">{{Session::get('warning', '')}}</div>
          @endif
          	<table class="table table-bordered">
      				<col width="50%">
              <col width="25%">
              <col width="25%">
      				<thead>
      					<th>Nombre</th>
      					<th>Cantidad</th>
                <th>Acción</th>
      				</thead>
      				@foreach($productos as $producto)
      					<tr>
      						<td>{{ $producto->nombre }}</td>
      						<td>{{ $producto->stock }}</td>
                  <td><a href="{{URL::to('/productos').'/'. $producto->id.'/edit'}}"><span>Editar</span></a>
                    <form class="form-group pull-right" action="{{URL::to('/productos').'/'. $producto->id.'/eliminar'}}" method="GET">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="from-control"><i class="fa fa-trash-o" style="font-size:16px"></i></button>
                    </form></td>
      					</tr>
      				@endforeach
      			</table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection