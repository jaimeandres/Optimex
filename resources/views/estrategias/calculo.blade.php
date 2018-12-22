@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Calculos en base a su Estrategia</div>
        <div class="panel-body">

        <form action="{{URL::to('/estrategia').'/'. $datos['productos'].'/calculo'}}" method="POST" class="form-horizontal">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">           
          <div class="form-group">
            <label class="control-label col-md-3">
              Tiempo de cobertura:
            </label>
            <div class="col-md-9">
              <input type="text" readonly="readonly" name="cobertura" value="{{$datos['cobertura']}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Porcentaje sobrante al final de tiempo de vida:
            </label>
            <div class="col-md-9">
              <input type="text" readonly="readonly" name="sobrante" value="{{$datos['sobrante']}}" class="form-control" required>
            </div>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection