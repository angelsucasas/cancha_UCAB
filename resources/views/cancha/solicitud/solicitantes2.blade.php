@extends('layouts.prueba')
@section('content')  

<table class="table table-striped table-dark table-bordered">
  <thead>

    <tr>     
      <th scope="col">nombre solicitante</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
  @if(isset($buscar_solicitud[0]->nombre))
  @foreach($buscar_solicitud as $solicituda)
    <tr class="bg-danger">
      
      <td>{{$solicituda->nombre}}</td>
      <td><button  style="color:white;" type="submit"  class="diana cities" ><a href="/integrante/agregar/{{$solicituda->cs}}/{{$solicituda->equipo}}">Aceptar solicitud?</button></a></td>
     
    </tr>
    @endforeach
@endif

 

@endsection