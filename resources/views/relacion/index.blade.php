@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading h-60">Asociación entre Gerentes y Productos
        <br>
        <h5 align="center">Gerentes de Producto</h5>              
        <div class="panel-body">
          <a class="link_" href="{{URL::to('/relacion/create')}}"><button class="btn btn-primary" style="float:right">Asociar</button></a><br><br>
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
                <th>Productos a cargo</th>
              </thead>
              @foreach($usuarios as $usuario)
                <tr>
                  <td>{{ $usuario->name }}</td>
                  <td>
                    <a href="{{URL::to('/relacion').'/'. $usuario->id.'/consultar'}}"><span>Ver Productos</span></a>
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