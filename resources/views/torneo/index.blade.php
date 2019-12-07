@extends('layouts.prueba')
@section('content')   
    <form action="/torneo/setear" method="post">
        <fieldset>
        {{csrf_field()}}
        
        <p >
            <h1 align="center">Nombre del torneo</h1>
            <input class="cities" type="text"  name="tournament_name" id="tournament_name" />
        </p>
        <hr>
        <h1 align="center" >Seleccione los equipos que participaran</h1>
        <br>
        <p>
          
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 1</label>                       
                        {!! Form::select('name1', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
    
        </p>
        <p>
            
            <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 2</label>                       
                        {!! Form::select('name2', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
      
        </p>
        </div>
        <div class="row">
        <p>
            
            <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 3</label>                       
                        {!! Form::select('name3', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
           
        </p>
        <p>
            
            <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 4</label>                       
                        {!! Form::select('name4', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
            
        </p>
        </div>
        <div class="row">
        <p>
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 5</label>                       
                        {!! Form::select('name5', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        <p>
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 6</label>                       
                        {!! Form::select('name6', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        </div>
        <div class="row">
        <p>
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 7</label>                       
                        {!! Form::select('name7', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        <p>
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 8</label>                       
                        {!! Form::select('name8', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        </div>
        <div class="row">
        <p>
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 9</label>                       
                        {!! Form::select('name9', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        <p> 
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 10</label>                       
                        {!! Form::select('name10', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        </div>
        <div class="row">
        <p> 
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 11</label>                       
                        {!! Form::select('name11', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        <p> 
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 12</label>                       
                        {!! Form::select('name12', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        </div>
        <div class="row">
        <p> 
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 13</label>                       
                        {!! Form::select('name13', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        <p> 
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 14</label>                       
                        {!! Form::select('name14', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        </div>
        <div class="row">
        <p> 
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 15</label>                       
                        {!! Form::select('name15', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>
        <p> 
        <div class="col-lg-6">
                <div class="form-group">
                {{csrf_field()}}
                    <label for="email">Equipo 16</label>                       
                        {!! Form::select('name16', $nom_equi, null, ['class' => 'cities']) !!}                
                </div>
            </div>
        </p>   
        </div>     

        <div align="center"><input class="diana cities" style="color:white;" type="submit" name="submit" value="submit" /></div>
        
        </fieldset>
        </form>
@endsection