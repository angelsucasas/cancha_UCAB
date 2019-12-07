@extends('layouts.prueba')
@section('content')   
<form action="/equipo/guardar" method="POST">
@csrf

  <h1 align="center"><i class="fas fa-user-friends"></i>Registro de equipo<i class="fas fa-user-friends"></i></h1>
  
    <hr>
    <input type="text" class="cities" placeholder="Ingrese el nombre del equipo" name="nom" required>
    <hr>
    <h1 align="center">Seleccione los jugadores del equipo</h1>
    <br>
                                  <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        {{csrf_field()}}         
                                        <div class="container">                     
                                        <h3><i class="fas fa-user"></i></h3><div class="ajuste-1">{!! Form::Label('item', 'Jugador 1') !!}
                                        </div></div>  {!! Form::select('jugador1', $solucion, null, ['class' => 'cities']) !!}         
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <div class="container">                     
                                        <h3><i class="fas fa-user"></i></h3><div class="ajuste-1">{!! Form::Label('item', 'Jugador 2') !!}
                                        </div></div>
                                        {!! Form::select('jugador2', $solucion, null, ['class' => 'cities']) !!}
                                      </div>
                                    </div> 
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        {{csrf_field()}}                              
                                        <div class="container">         
                                                    
                                        <h3><i class="fas fa-user"></i></h3><div class="ajuste-1">{!! Form::Label('item', 'Jugador 3') !!}
                                        </div></div>
                                          {!! Form::select('jugador3', $solucion, null, ['class' => 'cities']) !!}           
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <div class="container">                     
                                        <h3><i class="fas fa-user"></i></h3><div class="ajuste-1">{!! Form::Label('item', 'Jugador 4') !!}
                                        </div></div>
                                        {!! Form::select('jugador4', $solucion, null, ['class' => 'cities']) !!}
                                      </div>
                                    </div> 
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        {{csrf_field()}}                              
                                        <div class="container">                     
                                        <h3><i class="fas fa-user"></i></h3><div class="ajuste-1">{!! Form::Label('item', 'Jugador 5') !!}
                                        </div></div>
                                          {!! Form::select('jugador5', $solucion, null, ['class' => 'cities']) !!}           
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <div class="container">                     
                                        <h3><i class="fas fa-user"></i></h3><div class="ajuste-1">{!! Form::Label('item', 'Jugador 6') !!}
                                        </div></div>
                                        {!! Form::select('jugador6', $solucion, null, ['class' => 'cities']) !!}
                                      </div>
                                    </div> 
                                </div>
    <hr>
    <p align="center"> Recuerde que el orden de los jugadores no tiene ninguna relevancia.</p>
    
    <div align="center"  >
      <button  style="color:white;" type="submit"  class="diana cities" >Registrar</button>
    </div>
  
  
</form>
@endsection