@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      <div class="panel-heading">Seleccionar Gerente de Producto</div>
        <div class="panel-body">
          <form action="{{URL::to('/relacion/create')}}" method="GET" class="form-horizontal">
              <div class="form-group">
                <label class="control-label col-md-3">
                  Rol
                </label>
                <div class="col-md-9">
                  <select class="form-control" name="rol">
                    @foreach ($usuarios as $usuario)
                      <option value="{{$usuario->id}}">{{$usuario->name}}</option>
                    @endforeach
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                  <button type="submit"  class="btn btn-primary">Relacionar</button>
                </div>
              </div>
          </form>
          <form action="{{URL::to('/relacion').'/'.$usuario->id}}" method="GET" class="form-horizontal">
            <div class="form-group">
                <div class="col-md-9 col-md-offset-3">
                  <button type="submit"  class="btn btn-primary">Consultar</button>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection