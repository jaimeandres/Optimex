@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading h-60">Estrategias Históricas del {{$historicos[0]->nombre}}
        <div class="panel-body">
          @if (Session::has('mensaje'))
            <div class="alert alert-success">{{Session::get('mensaje', '')}}</div>
          @endif
          @if (Session::has('warning'))
            <div class="alert alert-warning">{{Session::get('warning', '')}}</div>
          @endif
            <table class="table table-bordered">
              <col width="50%">
              <col width="25%">
              <col width="25%">
              <thead>
                <th>Mes</th>
                <th>{{$historicos[0]->año}}</th>
                <th>{{$historicos[1]->año}}</th>
              </thead>
              <tr>
                <td>Enero</td>
                <td>{{$historicos[0]->enero}}</td>
                <td>{{$historicos[1]->enero}}</td>   
              </tr>
              <tr>
                <td>Febrero</td>
                <td>{{$historicos[0]->febrero}}</td>
                <td>{{$historicos[1]->febrero}}</td>   
              </tr>
              <tr>
                <td>Marzo</td>
                <td>{{$historicos[0]->marzo}}</td>
                <td>{{$historicos[1]->marzo}}</td>   
              </tr>
              <tr>
                <td>Abril</td>
                <td>{{$historicos[0]->abril}}</td>
                <td>{{$historicos[1]->abril}}</td>   
              </tr>
              <tr>
                <td>Mayo</td>
                <td>{{$historicos[0]->mayo}}</td>
                <td>{{$historicos[1]->mayo}}</td>   
              </tr>
              <tr>
                <td>Junio</td>
                <td>{{$historicos[0]->junio}}</td>
                <td>{{$historicos[1]->junio}}</td>   
              </tr>
              <tr>
                <td>Julio</td>
                <td>{{$historicos[0]->julio}}</td>
                <td>{{$historicos[1]->julio}}</td>   
              </tr>
              <tr>
                <td>Agosto</td>
                <td>{{$historicos[0]->agosto}}</td>
                <td>{{$historicos[1]->agosto}}</td>   
              </tr>
              <tr>
                <td>Septiembre</td>
                <td>{{$historicos[0]->septiembre}}</td>
                <td>{{$historicos[1]->septiembre}}</td>   
              </tr>
              <tr>
                <td>Octubre</td>
                <td>{{$historicos[0]->octubre}}</td>
                <td>{{$historicos[1]->octubre}}</td>   
              </tr>
              <tr>
                <td>Noviembre</td>
                <td>{{$historicos[0]->noviembre}}</td>
                <td>{{$historicos[1]->noviembre}}</td>   
              </tr>
              <tr>
                <td>Diciembre</td>
                <td>{{$historicos[0]->diciembre}}</td>
                <td>{{$historicos[1]->diciembre}}</td>   
              </tr>
              <tr>
                <td><b><u>Total</b></u></td>
                <td><b><u>{{$historicos[0]->total}}</b></u></td>
                <td><b><u>{{$historicos[1]->total}}</b></u></td>   
              </tr>              
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection