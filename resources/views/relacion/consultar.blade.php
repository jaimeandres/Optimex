@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
    @foreach($datos["usuarios"] as $usuario)
      <div class="panel-heading h-60">Productos de {{ $usuario->name }}
    @endforeach 
        <br>
        <a class="link_" href="{{URL::to('/relacion')}}"><button class="btn btn-primary" style="float:right">Regresar</button></a><br>
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
                <th>Nombre</th>
                <th>Quitar Producto</th>
              </thead>
              @foreach($datos["productos"] as $producto)
                <tr>
                  <td>{{ $producto->nombre }}</td>
                  <td>
                    @foreach($datos["usuarios"] as $usuario)
                    <form class="form-group pull-left" action="{{URL::to('/relacion').'/'. $producto->id.'/quitar'}}" method="GET">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <input type="hidden" name="_method" value="DELETE">
                      <button type="submit" class="from-control"><i class="fa fa-trash-o" style="font-size:16px"></i></button>
                    </form>
                    @endforeach 
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