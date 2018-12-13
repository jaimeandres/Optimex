@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-heading">Asociar</div>
        <div class="panel-body">
          <form action="{{URL::to('/relacion/create')}}" method="GET" class="form-horizontal">
                <div class="form-group">
                  <label class="control-label col-md-3">
                    Gerente
                  </label>
                  <div class="col-md-9">
                    <select class="form-control" name="productoSelec">
                      @foreach ($productos as $producto)
                        <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">
                    Producto
                  </label>
                  <div class="col-md-9">
                    <select class="form-control" name="productoSelec">
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
@endsection