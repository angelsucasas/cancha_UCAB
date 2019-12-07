@extends('layouts.prueba')
@section('content')   

<!-- Begin page content -->
<form action="/colina/ajustar" method="post">
{{csrf_field()}}
<div  class="container-fluid ">
<table class="table table-bordered ">
<thead>
  <tr class="gabriel">
    <th  style="color:white;" scope="col"><div align="center">Equipos en "Rey de la colina"</div></th>
  </tr>

</thead>
<tbody>



  <tr class="diana">
    <td style="color:white;"><div align="center">{{Form::radio('gan',$cod_act[0])}}
                {{$actuales[0]}}</div></td>
  </tr>
 

  <tr class="diana">
    <td style="color:white;"><div align="center">{{Form::radio('gan',$cod_act[1])}}
                {{$actuales[1]}}</div></td>
  </tr>
</tbody>
</table>

<table class="table table-bordered ">
<thead>
  <tr class="gabriel">
    <th  style="color:white;" scope="col"><div align="center">Equipos en espera</div></th>
  </tr>

</thead>
<tbody>
  @foreach($desafiantes as $desafiante)

  <tr class="diana">
    <td style="color:white;"><div align="center">{{$desafiante}}</div></td>
  </tr>

  @endforeach

</tbody>
</table>
</div>

                                <div  align="center">
                                    
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="enviar resultado">
                                    <div id="simple-msg"></div>
                               
                                </div>    

</form>

<form action="/colina/agregar" method="post">
            <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 1</label>                       
                        {!! Form::select('cod', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
            <div  align="center" class="container">
                                    
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="Agregar equipo">
                                    <div id="simple-msg"></div>
                               
                               
                                </div>
                                
</form>
<br>
<form action="/colina/reset" method="post">
            <div  align="right" class="container">
            {{csrf_field()}}
                                    
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="Reiniciar colina">
                                    <div id="simple-msg"></div>
                               
                               
                                </div>
                                </div>
</form>
</div>

 
@endsection