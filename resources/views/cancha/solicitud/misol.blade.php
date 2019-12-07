@extends('layouts.prueba')
@section('content')  

<table class="table table-striped table-dark table-bordered">
  <thead>
  @if(isset($buscar_solicitud[0]->dep))
    <tr>     
    <th scope="col">dia</th>
      <th scope="col">hora</th>
      <th scope="col">integrantes faltantes</th>
      <th scope="col">deporte</th>
      <th scope="col">equipo</th>
      
      <th scope="col">Solicitantes</th>
    </tr>
  </thead>
  <tbody>

  @foreach($buscar_solicitud as $solicituda)
    <tr class="bg-danger">
      
      <td>{{$solicituda->dia}}</td>
      <td>{{$solicituda->hora}}</td>
      <td>{{$solicituda->integrante}}</td>
      <td>{{$solicituda->dep}}</td>
      <td>{{$solicituda->equipo}}</td>
      <td><a href="/solicitud/solicitantes/{{$solicituda->cs}}/eleccion">Ver solicitantes</td>
      
    </tr>
    @endforeach
@endif
  </tbody>
</table>


@endsection