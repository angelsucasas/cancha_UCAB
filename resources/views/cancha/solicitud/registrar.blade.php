@extends('layouts.prueba')
@section('content')  
<form action="/solicitud/registrar" method="POST">
<h1 align="center"><span class="glyphicon glyphicon-asterisk"></span>Prepare la solicitud<span class="glyphicon glyphicon-asterisk"></span></h1>
<hr>
<h4 align="center"><span class="glyphicon glyphicon-asterisk"></span>esta es una solicitud de integrantes faltantes<span class="glyphicon glyphicon-asterisk"></span></h4>
<h4 align="center"><span class="glyphicon glyphicon-asterisk"></span>seleccione uno de sus equipos, <span class="glyphicon glyphicon-asterisk"></span></h4>
<h4 align="center"><span class="glyphicon glyphicon-asterisk"></span>e indique cuantos integrantes le gustaria solicitar<span class="glyphicon glyphicon-asterisk"></span></h4>
<h4 align="center"><span class="glyphicon glyphicon-asterisk"></span>al igual que el dia, hora y deporte<span class="glyphicon glyphicon-asterisk"></span></h4>
<hr>
<br>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        {{csrf_field()}}
                                                <label for="email">deporte</label>
                                                
                                                {!! Form::select('dep', $nom_dep, null, ['class' => 'cities']) !!}                
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">dia</label>
                                            <br>
                                            {!! Form::select('dia', $dias, null, ['class' => 'cities']) !!}
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        {{csrf_field()}}
                                                <label for="email">hora comienzo</label>
                                                
                                                {!! Form::select('hora1', $horas, null, ['class' => 'cities']) !!}                
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">hora de culminacion</label>
                                            <br>
                                            {!! Form::select('hora2', $horas, null, ['class' => 'cities']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        {{csrf_field()}}
                                                <label for="email">escoja el equipo </label>
                                                
                                                {!! Form::select('equipo', $nom_equi, null, ['class' => 'cities']) !!}                
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">                     
                                                <label for="email">seleccione el numero de integrantes que necesita </label>           
                                                {!! Form::select('integrantes', $maximo, null, ['class' => 'cities']) !!}                
                                        </div>
                                    </div>
                                    
                                </div>
                                <div align="center"  >
                                    <button  style="color:white;" type="submit"  class="diana cities" >Montar solicitud</button>
                                </div>
</form>
@endsection