@extends('layouts.prueba')
@section('content')   
    <form action="/colina/iniciar" method="post">
        <fieldset>
        {{csrf_field()}}
     
        
        <h1 align="center" >Seleccione los equipos iniciales </h1>
        <br>
        <hr>
        <p>
          
            <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 1</label>                       
                        {!! Form::select('nom1', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
    
        </p>
        <p>
            
            <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 2</label>                       
                        {!! Form::select('nom2', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        </div>
             

        <div align="center"><input class="diana cities" style="color:white;" type="submit" name="submit" value="submit" /></div>
        
        </fieldset>
        </form>
@endsection