@extends('layouts.app')

@section('content')
<?php
	function swichRol($id){
		switch ($id) {
			case '1':
				return "Gerente de Producto";
			case '2':
				return "Administrativo";
			case '99':
				return "Administrador";
			default:
				return "???";
		}
	}
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actualización de Usuarios</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{URL::to('/usuarios').'/'. $usuarios->id.'/edit'}}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Nombre</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" pattern="[A-Za-z0-9 ]+" value="{{ $usuarios->name }}" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail</label>
                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ $usuarios->email }}" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-md-4 control-label">Rol</label>
                            <div class="col-md-6">
                                <select name="rol" class="form-control">
                                    <option value="{{ $usuarios->rol }}" selected>{{ swichRol($usuarios->rol) }}</option>
                                    <option value="1">Gerente de Producto</option>
                                    <option value="2">Administrativo</option>
                                    <option value="99">Administrador</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Editar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection