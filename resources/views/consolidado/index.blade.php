@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading h-60">Historicos de Distribuciones
        <div class="panel-body">
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
                <th>Productos</th>
                <th>Total</th>
                <th>Accion</th>
              </thead>
              @for ($i = 0; $i <  count($datos['productos']); $i++)
                <tr>
                  <td>{{ $datos["productos"][$i]->nombre }}</td>
                  <td>{{ $datos["total"][$i]->total }}</td>
                  <td>
                    <a href="{{URL::to('/consolidado').'/'. $datos['productos'][$i]->id.'/show'}}"><span>Ver Detalle</span></a>
                  </td>
                </tr>
              @endfor
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection