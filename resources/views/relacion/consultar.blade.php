@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading h-60">Productos del 
        <br>
        <a class="link_" href="{{URL::to('/relacion')}}"><button class="btn-add" style="float:right">Regresar</button></a><br>
        <div class="panel-body">
          @if (Session::has('mensaje'))
            <div class="alert alert-success">{{Session::get('mensaje', '')}}</div>
          @endif
          @if (Session::has('warning'))
            <div class="alert alert-warning">{{Session::get('warning', '')}}</div>
          @endif
            <table class="table table-bordered">
              <thead>
                <th>Nombre</th>
              </thead>
              @foreach($datos["productos"] as $producto)
                <tr>
                  <td>{{ $producto->nombre }}</td>                  
                </tr>
              @endforeach
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection