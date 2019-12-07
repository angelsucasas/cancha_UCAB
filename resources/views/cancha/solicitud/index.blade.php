@extends('layouts.prueba')
@section('content')  

<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_solicitud_lunes[0]->dep))
    <tr>     
    <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">integrantes faltantes</th>
      <th scope="col">deporte</th>
      <th scope="col">equipo</th>
      <th scope="col"></th>
      <th scope="col">Solicitantes</th>
    </tr>
  </thead>
  <tbody>

  @foreach($buscar_solicitud_lunes as $solicituda)
    <tr class="bg-danger">
      
      <td>{{$solicituda->dia}}</td>
      <td>{{$solicituda->hora}}</td>
      <td>{{$solicituda->integrante}}</td>
      <td>{{$solicituda->dep}}</td>
      <td>{{$solicituda->equipo}}</td>
      <td><button  style="color:white;" type="submit"  class="diana cities" ><a href="/solicitud/agregar/{{$solicituda->cs}}">Registrarse?</button></a></td>
      <td><a href="/solicitud/solicitantes/{{$solicituda->cs}}">Ver solicitantes</td>
      
    </tr>
    @endforeach
@endif

  </tbody>
</table>
<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_solicitud_martes[0]->dep))
    <tr>     
      <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">integrantes faltantes</th>
      <th scope="col">deporte</th>
      <th scope="col">equipo</th>
      <th scope="col"></th>
      <th scope="col">Solicitantes</th>
    </tr>
  </thead>
  <tbody>
 
  @foreach($buscar_solicitud_martes as $mar)
    <tr class="bg-danger">
      
      <td>{{$mar->dia}}</td>
      <td>{{$mar->hora}}</td>
      <td>{{$mar->integrante}}</td>
      <td>{{$mar->dep}}</td>
      <td>{{$mar->equipo}}</td>
      <td><button  style="color:white;" type="submit"  class="diana cities" ><a href="/solicitud/agregar/{{$mar->cs}}">Registrarse?</button></a></td>
      <td><a href="/solicitud/solicitantes/{{$mar->cs}}">Ver solicitantes</td>
      
    </tr>
    @endforeach
@endif
  </tbody>
</table>

<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_solicitud_miercoles[0]->dep))
    <tr>     
    <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">integrantes faltantes</th>
      <th scope="col">deporte</th>
      <th scope="col">equipo</th>
      <th scope="col"></th>
      <th scope="col">Solicitantes</th>
    </tr>
  </thead>
  <tbody>

  @foreach($buscar_solicitud_miercoles as $solicitudb)
    <tr class="bg-danger">
      
    <td>{{$solicitudb->dia}}</td>
      <td>{{$solicitudb->hora}}</td>
      <td>{{$solicitudb->integrante}}</td>
      <td>{{$solicitudb->dep}}</td>
      <td>{{$solicitudb->equipo}}</td>
      <td><button  style="color:white;" type="submit"  class="diana cities" ><a href="/solicitud/agregar/{{$solicitudb->cs}}">Registrarse?</button></a></td>
      <td><a href="/solicitud/solicitantes/{{$solicitudb->cs}}">Ver solicitantes</td>
      
    @endforeach
@endif

  </tbody>
</table>

<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_solicitud_jueves[0]->dep))
    <tr>     
    <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">integrantes faltantes</th>
      <th scope="col">deporte</th>
      <th scope="col">equipo</th>
      <th scope="col"></th>
      <th scope="col">Solicitantes</th>
    </tr>
  </thead>
  <tbody>

  @foreach($buscar_solicitud_jueves as $solicitudc)
    <tr class="bg-danger">
      
    <td>{{$solicitudc->dia}}</td>
      <td>{{$solicitudc->hora}}</td>
      <td>{{$solicitudc->integrante}}</td>
      <td>{{$solicitudc->dep}}</td>
      <td>{{$solicitudc->equipo}}</td>
      <td><button  style="color:white;" type="submit"  class="diana cities" ><a href="/solicitud/agregar/{{$solicitudc->cs}}">Registrarse?</button></a></td>
      <td><a href="/solicitud/solicitantes/{{$solicitudc->cs}}">Ver solicitantes</td>
      
    </tr>
    @endforeach
@endif

  </tbody>
</table>

<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_solicitud_viernes[0]->dep))
    <tr>     
    <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">integrantes faltantes</th>
      <th scope="col">deporte</th>
      <th scope="col">equipo</th>
      <th scope="col"></th>
      <th scope="col">Solicitantes</th>
    </tr>
  </thead>
  <tbody>

  @foreach($buscar_solicitud_viernes as $solicitudd)
    <tr class="bg-danger">
      
    <td>{{$solicitudd->dia}}</td>
      <td>{{$solicitudd->hora}}</td>
      <td>{{$solicitudd->integrante}}</td>
      <td>{{$solicitudd->dep}}</td>
      <td>{{$solicitudd->equipo}}</td>
      <td><button  style="color:white;" type="submit"  class="diana cities" ><a href="/solicitud/agregar/{{$solicitudd->cs}}">Registrarse?</button></a></td>
      <td><a href="/solicitud/solicitantes/{{$solicitudd->cs}}">Ver solicitantes</td>
      
    </tr>
    @endforeach
@endif

  </tbody>
</table>


<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_solicitud_sabado[0]->dep))
    <tr>     
    <th scope="col">hora</th>
      <th scope="col">integrantes faltantes</th>
      <th scope="col">deporte</th>
      <th scope="col">equipo</th>
      <th scope="col"></th>
      <th scope="col">Solicitantes</th>
    </tr>
  </thead>
  <tbody>

  @foreach($buscar_solicitud_sabado as $solicitudf)
    <tr class="bg-danger">
      
    <td>{{$solicitudf->dia}}</td>
      <td>{{$solicitudf->hora}}</td>
      <td>{{$solicitudf->integrante}}</td>
      <td>{{$solicitudf->dep}}</td>
      <td>{{$solicitudf->equipo}}</td>
      <td><button  style="color:white;" type="submit"  class="diana cities" ><a href="/solicitud/agregar/{{$solicitudf->cs}}">Registrarse?</button></a></td>
      <td><a href="/solicitud/solicitantes/{{$solicitudf->cs}}">Ver solicitantes</td>
      
    </tr>
    @endforeach
@endif

  </tbody>
</table>


@endsection