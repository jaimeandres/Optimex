@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading h-60">Productos Disponibles
        <div class="panel-body">
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
                <th>Productos</th>
                <th>Accion</th>
              </thead>
              @foreach($datos["productos"] as $producto)
                <tr>
                  <td>{{ $producto->nombre }}</td>
                  <td>
                    <a href="{{URL::to('/inventario').'/'. $producto->id.'/edit'}}"><span>Ingresar inventario</span></a>
                  </td>
                </tr>
              @endforeach
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection