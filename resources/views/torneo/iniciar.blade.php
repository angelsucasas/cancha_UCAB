@extends('layouts.prueba')
@section('content')   
    <form action="/torneo/registro" method="get">
    <h1 align="center">Seleccione las configuraciones del torneo</h1>
    <hr>
    <h1 align="center">indique el tipo de torneo y n° de participantes</h1>
    <br>
                                  <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        {{csrf_field()}}                              
                                         
                                          {!! Form::select('jugador1', $tipot, null, ['class' => 'cities']) !!}           
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        
                                        {!! Form::select('jugador2', $num_participantes, null, ['class' => 'cities']) !!}
                                      </div>
                                    </div> 
                                </div>
                                <div align="center"  >
                                    <button  style="color:white;" type="submit"  class="diana cities" >iniciar</button>
                                </div>
    </form>
@endsection