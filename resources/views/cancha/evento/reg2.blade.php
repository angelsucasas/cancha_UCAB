@extends('layouts.prueba')
@section('content')   
       
                            <form action="/evento/guardar" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Nombre del evento</label>
                                            <input name="nom" id="nombre" type="text" class="form-control" placeholder="Ingresa el nombre del equipo...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="email">Host</label>
                                            <input name="host" id="host" type="text" class="form-control" placeholder="Ingresa el nombre del responsable del evento...">
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        {{csrf_field()}}
                                                <label for="email">Deporte</label>
                                                
                                                {!! Form::select('dep', $nom_dep, null, ['class' => 'cities']) !!}                
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Día del evento</label>
                                            <br>
                                            {!! Form::select('dia', $dias, null, ['class' => 'cities']) !!}
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        {{csrf_field()}}
                                                <label for="email">Hora comienzo</label>
                                                
                                                {!! Form::select('hora1', $horas, null, ['class' => 'cities']) !!}                
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Hora de culminación</label>
                                            <br>
                                            {!! Form::select('hora2', $horas, null, ['class' => 'cities']) !!}
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="subject">Asunto</label>
                                            <input name="subject" id="subject" type="text" class="form-control" placeholder="Ingresar Asunto...">
                                        </div>
                                    </div>
                                </div>-->
                                <!-- end row -->

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="comments">Descripción</label>
                                            <textarea name="descripcion" id="descripcion" rows="4" class="form-control" placeholder="Ingrese otros detalles del evento..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                                <div  align="center">
                                    
                                        <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="Crear evento">
                                        <div id="simple-msg"></div>
                                   
                                </div>
                                <!-- end row -->
                            </form>

@endsection
                        