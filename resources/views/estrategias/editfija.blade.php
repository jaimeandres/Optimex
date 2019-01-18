@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Ingrese la cantidad de su Estrategia</div>
        <div class="panel-body">

        <form action="{{URL::to('/estrategia').'/'. $datos['productos'].'/editfija'}}" method="POST" class="form-horizontal">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label class="control-label col-md-3">
              Cantidad
            </label>
            <div class="col-md-9">
            @foreach($datos['estrategias'] as $estrategia)
              <input type="text" name="fija" pattern="[0-9]+" value="{{$estrategia->enero}}" class="form-control" required>
            @endforeach
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