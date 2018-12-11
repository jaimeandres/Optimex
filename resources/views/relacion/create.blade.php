@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Productos disponibles</div>
        <div class="panel-body">
          <form action="{{URL::to('/relacion/create')}}" method="GET" class="form-horizontal">
                <div class="form-group">
                  <label class="control-label col-md-3">
                    Rol
                  </label>
                  <div class="col-md-9">
                    <select class="form-control" name="rol">
                      @foreach ($productos as $producto)
                        <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <input type="hidden" name="estado" value="1">
                <div class="form-group">
                  <div class="col-md-9 col-md-offset-3">
                    <button type="submit"  class="btn btn-primary">Ingresar</button>
                  </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!--div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading h-60">Productos<a class="link_" href="{{URL::to('/productos/create')}}"><button class="btn-add" style="float:right">Registar</button></a>
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
                <th>Cantidad</th>
              </thead>
              @foreach($productos as $producto)
                <tr>
                  <td>{{ $producto->nombre }}</td>
                  <td>{{ $producto->stock }}</td>
                </tr>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div-->
@endsection