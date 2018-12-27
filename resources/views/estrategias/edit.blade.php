@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Ingrese las cantidads de su Estrategia</div>
        <div class="panel-body">

        <form action="{{URL::to('/estrategia').'/'. $datos['productos'].'/edit'}}" method="POST" class="form-horizontal">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
        @foreach($datos['estrategias'] as $estrategia) 
          <div class="form-group">
            <label class="control-label col-md-3">
              Enero
            </label>
            <div class="col-md-9">
              <input type="text" name="enero" value="{{$estrategia->enero}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Febrero
            </label>
            <div class="col-md-9">
              <input type="text" name="febrero" value="{{$estrategia->febrero}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Marzo
            </label>
            <div class="col-md-9">
              <input type="text" name="marzo" value="{{$estrategia->marzo}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Abril
            </label>
            <div class="col-md-9">
              <input type="text" name="abril" value="{{$estrategia->abril}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Mayo
            </label>
            <div class="col-md-9">
              <input type="text" name="mayo" value="{{$estrategia->mayo}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Junio
            </label>
            <div class="col-md-9">
              <input type="text" name="junio" value="{{$estrategia->junio}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Julio
            </label>
            <div class="col-md-9">
              <input type="text" name="julio" value="{{$estrategia->julio}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Agosto
            </label>
            <div class="col-md-9">
              <input type="text" name="agosto" value="{{$estrategia->agosto}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Septiembre
            </label>
            <div class="col-md-9">
              <input type="text" name="septiembre" value="{{$estrategia->septiembre}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Octubre
            </label>
            <div class="col-md-9">
              <input type="text" name="octubre" value="{{$estrategia->octubre}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Noviembre
            </label>
            <div class="col-md-9">
              <input type="text" name="noviembre" value="{{$estrategia->noviembre}}" class="form-control" required>
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">
              Diciembre
            </label>
            <div class="col-md-9">
              <input type="text" name="diciembre" value="{{$estrategia->diciembre}}" class="form-control" required>
            </div>
          </div>
        @endforeach            
          <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
              <input type="submit" name="Guardar" value="Ingresar" class="btn btn-primary" >
            </div>
          </div>
        </form>
        <a class="link_" href="{{URL::to('/estrategia')}}"><button class="btn btn-primary" style="float:right">Regresar</button></a><br>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection