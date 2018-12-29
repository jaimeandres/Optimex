@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Generación de Históricos</div>
        <div class="panel-body">

        <form action="{{URL::to('/historico')}}" method="POST" class="form-horizontal">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label class="control-label col-md-3">
              Año en curso: {{$año[0]->año}}
            </label>
            <div class="col-md-6">
              <input type="submit" name="Guardar" value="Generar" class="btn btn-primary" >
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-9 col-md-offset-3">
              Los historicos solo se generan una vez por año
            </label>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection