@extends('layouts.prueba')
@section('content')  

<table class="table table-striped table-dark table-bordered">
  <thead>

    <tr>     
      <th scope="col">nombre solicitante</th>

    </tr>
  </thead>
  <tbody>
  @if(isset($buscar_solicitud[0]->nombre))
  @foreach($buscar_solicitud as $solicituda)
    <tr class="bg-danger">
      
      <td>{{$solicituda->nombre}}</td>
    </tr>
    @endforeach
@endif

 

@endsection