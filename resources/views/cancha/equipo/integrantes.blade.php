@extends('layouts.prueba')
@section('content')   

<!-- Begin page content -->


<div class="container-fluid">

<table  class="table table-bordered">
<thead>
  <tr class="gabriel">
    
    <th  style="color:white;" scope="col"><div align="center">integrantes del equipo {{$equipo}}</div></th>

  </tr>
  
</thead>
<tbody>
@foreach($nom_equi as $eq)
  <tr class="diana">
    
    <td style="color:white;"><div align="center">{{$eq}}</div></td>
 
  </tr>
  @endforeach
</tbody>
</table>
 
 
 
  </div>
</div>
@endsection