@extends('layouts.prueba')
@section('content')   


<!-- Begin page content -->

  <div class="container-fluid">

  <table  class="table table-bordered">
  <thead>
    <tr class="gabriel">
      
      <th  style="color:white;" scope="col"><div align="center">Mis equipos</div></th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($nom_equi as $equipo)
    <tr class="diana">
      
      <td style="color:white;"><div align="center">{{$equipo}}</div></td>
    
    </tr>
    @endforeach
  </tbody>
</table>
   
   
   
    </div>
  </div>

@endsection