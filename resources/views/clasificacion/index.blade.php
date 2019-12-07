@extends('layouts.prueba')
@section('content')   


<!-- Begin page content -->

  <div class="container-fluid">

  <table  class="table table-bordered">
  <thead>
    <tr class="gabriel">
      
      <th  style="color:white;" scope="col"><div align="center">clasificacion- top 10</div></th>
      <th  style="color:white;" scope="col"><div align="center"> puntaje </div></th>
      
    </tr>
  </thead>
  <tbody>
  @if(isset($nom_def[0]))
    <tr class="diana">
      
      <td style="color:white;"><div align="center">{{$nom_def[0]}}</div></td>
      <td style="color:white;"><div align="center">{{$top10[0]}}</div></td>
    
    </tr>
    @endif
    @if(isset($nom_def[1]))
    <tr class="diana">
      
      <td style="color:white;"><div align="center">{{$nom_def[1]}}</div></td>
      <td style="color:white;"><div align="center">{{$top10[1]}}</div></td>
    
    </tr>
    @endif
    @if(isset($nom_def[2]))
    <tr class="diana">
      
      <td style="color:white;"><div align="center">{{$nom_def[2]}}</div></td>
      <td style="color:white;"><div align="center">{{$top10[2]}}</div></td>
    
    </tr>
    @endif
    @if(isset($nom_def[3]))
    <tr class="diana">
      
      <td style="color:white;"><div align="center">{{$nom_def[3]}}</div></td>
      <td style="color:white;"><div align="center">{{$top10[3]}}</div></td>
    
    </tr>
    @endif
    @if(isset($nom_def[4]))
    <tr class="diana">
      
      <td style="color:white;"><div align="center">{{$nom_def[4]}}</div></td>
      <td style="color:white;"><div align="center">{{$top10[4]}}</div></td>
    
    </tr>
    @endif
    @if(isset($nom_def[5]))
    <tr class="diana">
      
      <td style="color:white;"><div align="center">{{$nom_def[5]}}</div></td>
      <td style="color:white;"><div align="center">{{$top10[5]}}</div></td>
    
    </tr>
    @endif
    @if(isset($nom_def[6]))
    <tr class="diana">
      
      <td style="color:white;"><div align="center">{{$nom_def[6]}}</div></td>
      <td style="color:white;"><div align="center">{{$top10[6]}}</div></td>
    
    </tr>
    @endif
    @if(isset($nom_def[7]))
    <tr class="diana">
      
      <td style="color:white;"><div align="center">{{$nom_def[7]}}</div></td>
      <td style="color:white;"><div align="center">{{$top10[7]}}</div></td>
    
    </tr>
    @endif
    @if(isset($nom_def[8]))
    <tr class="diana">
      
      <td style="color:white;"><div align="center">{{$nom_def[8]}}</div></td>
      <td style="color:white;"><div align="center">{{$top10[8]}}</div></td>
    
    </tr>
    @endif
    @if(isset($nom_def[9]))
    <tr class="diana">
      
      <td style="color:white;"><div align="center">{{$nom_def[9]}}</div></td>
      <td style="color:white;"><div align="center">{{$top10[9]}}</div></td>
    
    </tr>
    @endif
    
  </tbody>
</table>
   
   
   
    </div>
  </div>

@endsection