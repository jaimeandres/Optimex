@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading h-60">Estrategia
        <div class="panel-body">
          @if (Session::has('mensaje'))
            <div class="alert alert-success">{{Session::get('mensaje', '')}}</div>
          @endif
          @if (Session::has('warning'))
            <div class="alert alert-warning">{{Session::get('warning', '')}}</div>
          @endif
          <div id="grafica"></div>
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
             title:{text:'Estrategia del año en curso'},
             xAxis:{categories:['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre']},
             yAxis:{title:'Cantidad',plotLines:[{value:0,width:1,color:'#808080'}]},
             legend:{layout:'vertical',align:'right',verticalAlign:'middle',borderWidth:0},
             series:[
             {type: 'column',name: 'Cantidad',data: [{{$estrategia->enero}},{{$estrategia->febrero}},{{$estrategia->marzo}},{{$estrategia->abril}},{{$estrategia->mayo}},{{$estrategia->junio}},{{$estrategia->julio}},{{$estrategia->agosto}},{{$estrategia->septiembre}},{{$estrategia->octubre}},{{$estrategia->noviembre}},{{$estrategia->diciembre}}]}
             ],
             plotOptions:{line:{dataLabels:{enabled:true}}}
         });
     });
</script>
@endsection