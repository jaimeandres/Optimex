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
            <!--table class="table table-bordered">
              <col width="50%">
              <col width="50%">
              <thead>
                <th>Mes</th>
                <th>Cantidad</th>
              </thead>
              <tr>
                <td>Enero</td>
                <td>{{$estrategia->enero}}</td>   
              </tr>
              <tr>
                <td>Febrero</td>
                <td>{{$estrategia->febrero}}</td>  
              </tr>
              <tr>
                <td>Marzo</td>
                <td>{{$estrategia->marzo}}</td>   
              </tr>
              <tr>
                <td>Abril</td>
                <td>{{$estrategia->abril}}</td>   
              </tr>
              <tr>
                <td>Mayo</td>
                <td>{{$estrategia->mayo}}</td>   
              </tr>
              <tr>
                <td>Junio</td>
                <td>{{$estrategia->junio}}</td>   
              </tr>
              <tr>
                <td>Julio</td>
                <td>{{$estrategia->julio}}</td>   
              </tr>
              <tr>
                <td>Agosto</td>
                <td>{{$estrategia->agosto}}</td>  
              </tr>
              <tr>
                <td>Septiembre</td>
                <td>{{$estrategia->septiembre}}</td>  
              </tr>
              <tr>
                <td>Octubre</td>
                <td>{{$estrategia->octubre}}</td>   
              </tr>
              <tr>
                <td>Noviembre</td>
                <td>{{$estrategia->noviembre}}</td>   
              </tr>
              <tr>
                <td>Diciembre</td>
                <td>{{$estrategia->diciembre}}</td>   
              </tr>              
            </table-->
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