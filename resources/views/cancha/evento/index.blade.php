@extends('layouts.prueba')
@section('content')  
<h1>Eventos disponibles en Cancha</h1>
<hr>
<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_Equipo_lunes[0]->dep))
    <tr>     
    <th scope="col">nombre evento</th>
    <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">deporte</th>
      <th scope="col">Responsable</th> 
    </tr>
  </thead>
  <tbody>

  @foreach($buscar_Equipo_lunes as $solicituda)
    <tr class="bg-danger">
    <td>{{$solicituda->nombre}}</td>
      <td>{{$solicituda->dia}}</td>
      <td>{{$solicituda->hora}}</td>     
      <td>{{$solicituda->dep}}</td>
      <td>{{$solicituda->res}}</td>  
      
    </tr>
    @endforeach
@endif

  </tbody>
</table>
<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_Equipo_martes[0]->dep))
    <tr>     
    <th scope="col">nombre evento</th>
    <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">deporte</th>
      <th scope="col">Responsable</th> 
   
    </tr>
  </thead>
  <tbody>
 
  @foreach($buscar_Equipo_martes as $mar)
    <tr class="bg-danger">
    <td>{{$mar->nombre}}</td>    
      <td>{{$mar->dia}}</td>
      <td>{{$mar->hora}}</td>
      <td>{{$mar->dep}}</td>
      <td>{{$mar->res}}</td>  
    </tr>
    @endforeach
@endif
  </tbody>
</table>

<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_Equipo_miercoles[0]->dep))
    <tr>     
    <th scope="col">nombre evento</th>
    <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">deporte</th>
      <th scope="col">Responsable</th> 
   
    </tr>
  </thead>
  <tbody>

  @foreach($buscar_Equipo_miercoles as $solicitudb)
    <tr class="bg-danger">
    <td>{{$solicitudb->nombre}}</td>          
    <td>{{$solicitudb->dia}}</td>
      <td>{{$solicitudb->hora}}</td>
      <td>{{$solicitudb->dep}}</td>
      <td>{{$solicitudb->res}}</td> 
    @endforeach
@endif

  </tbody>
</table>

<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_Equipo_jueves[0]->dep))
    <tr>     
    <th scope="col">nombre evento</th>
    <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">deporte</th>
      <th scope="col">Responsable</th> 
   
    </tr>
  </thead>
  <tbody>

  @foreach($buscar_Equipo_jueves as $solicitudc)
    <tr class="bg-danger">
    <td>{{$solicitudc->nombre}}</td>          
    <td>{{$solicitudc->dia}}</td>
      <td>{{$solicitudc->hora}}</td>    
      <td>{{$solicitudc->dep}}</td>
      <td>{{$solicitudc->res}}</td> 
    </tr>
    @endforeach
@endif

  </tbody>
</table>

<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_Equipo_viernes[0]->dep))
    <tr>     
    <th scope="col">nombre evento</th>
    <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">deporte</th>
      <th scope="col">Responsable</th> 
   
    </tr>
  </thead>
  <tbody>

  @foreach($buscar_Equipo_viernes as $solicitudd)
    <tr class="bg-danger">
    <td>{{$solicitudd->nombre}}</td>           
    <td>{{$solicitudd->dia}}</td>
      <td>{{$solicitudd->hora}}</td>
      <td>{{$solicitudd->dep}}</td>
      <td>{{$solicitudd->res}}</td> 
    </tr>
    @endforeach
@endif

  </tbody>
</table>

<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_Equipo_sabado[0]->dep))
    <tr>     
    <th scope="col">nombre evento</th>
    <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">deporte</th>
      <th scope="col">Responsable</th> 
   
    </tr>
  </thead>
  <tbody>

  @foreach($buscar_Equipo_sabado as $solicitudf)
    <tr class="bg-danger">
    <td>{{$solicitudf->nombre}}</td>   
    <td>{{$solicitudf->dia}}</td>
      <td>{{$solicitudf->hora}}</td>
      
      <td>{{$solicitudf->dep}}</td>
      <td>{{$solicitudf->res}}</td> 
             
    
    </tr>
    @endforeach
@endif

  </tbody>
</table>




@endsection