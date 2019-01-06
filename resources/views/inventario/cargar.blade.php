@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Inventario del {{$productos->nombre}}</div>
        <div class="panel-body">

        <form action="{{URL::to('/inventario').'/'. $productos->id.'/edit'}}" method="POST" class="form-horizontal">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">          
          <div class="form-group">
            <label class="control-label col-md-3">
              Cantidad
            </label>
            <div class="col-md-9">            
              <input type="text" name="stock" value="{{$productos->stock}}" class="form-control" required>            
            </div><br><br>            
            <label class="control-label col-md-3">
              Fecha Caducidad (A-M-D)
            </label>
            <div class="col-md-9">            
              <input type="text" name="caducidad" value="{{$productos->fechaCaducidad}}" class="form-control" required>            
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
              <input type="submit" name="Guardar" value="Actualizar" class="btn btn-primary" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-9 col-md-offset-3">
              Los valores son los registrados actualmente
            </label>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection