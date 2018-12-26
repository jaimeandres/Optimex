@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Edición de Productos</div>
        <div class="panel-body">

        <form action="{{URL::to('/productos')}}" method="POST" class="form-horizontal">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label class="control-label col-md-3">
              Nombre Producto
            </label>
            <div class="col-md-9">
              <input type="text" name="nombre" value="" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
              <input type="submit" name="Guardar" value="Ingresar" class="btn btn-primary" >
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection