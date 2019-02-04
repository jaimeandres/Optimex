@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading h-60">Estrategias Históricas
        <div class="panel-body">
          @if (Session::has('mensaje'))
            <div class="alert alert-success">{{Session::get('mensaje', '')}}</div>
          @endif
          @if (Session::has('warning'))
            <div class="alert alert-warning">{{Session::get('warning', '')}}</div>
          @endif
          <div id="grafica"></div>
            <table class="table table-bordered">
              <col width="50%">
              <col width="25%">
              <col width="25%">
              <thead>
                <th>Año</th>
                <th>{{$historicos[0]->año}}</th>
                <th>{{$historicos[1]->año}}</th>
              </thead>
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
</div>
@endsection
@section('scripts')
<script>
  $(function($){
         $('#grafica').highcharts({
             title:{text:'{{$historicos[0]->nombre}}'},
             xAxis:{categories:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']},
             yAxis:{title:'Cantidad #',plotLines:[{value:0,width:1,color:'#808080'}]},
             legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
             series:[
             {type: 'column',name: '{{$historicos[0]->año}}',data: [{{$historicos[0]->enero}},{{$historicos[0]->febrero}},{{$historicos[0]->marzo}},{{$historicos[0]->abril}},{{$historicos[0]->mayo}},{{$historicos[0]->junio}},{{$historicos[0]->julio}},{{$historicos[0]->agosto}},{{$historicos[0]->septiembre}},{{$historicos[0]->octubre}},{{$historicos[0]->noviembre}},{{$historicos[0]->diciembre}}]}, 
             {type: 'column',name: '{{$historicos[1]->año}}',data: [{{$historicos[1]->enero}},{{$historicos[1]->febrero}},{{$historicos[1]->marzo}},{{$historicos[1]->abril}},{{$historicos[1]->mayo}},{{$historicos[1]->junio}},{{$historicos[1]->julio}},{{$historicos[1]->agosto}},{{$historicos[1]->septiembre}},{{$historicos[1]->octubre}},{{$historicos[1]->noviembre}},{{$historicos[1]->diciembre}}]}
             ],
             plotOptions:{line:{dataLabels:{enabled:true}}}
         });
     });
</script>
@endsection