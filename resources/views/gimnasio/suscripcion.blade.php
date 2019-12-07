@extends('layouts.prueba')
@section('content')   
<!-- Begin page content -->

<form action="/gimnasio/guardar" method="post">
{{csrf_field()}}
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Cedula</label>
                                            <input name="nom" id="nombre" type="text" class="form-control" placeholder="Ingresa el nombre del equipo...">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">numero de cuenta</label>
                                            <input name="nom" id="nombre" type="text" class="form-control" placeholder="Ingresa el nombre del equipo...">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Selecciona el banco</label>
                                            {!! Form::select('dep', $nom_dep, null, ['class' => 'cities']) !!}
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <br>
                                            <br>
                                            <label for="name">Monto: 150.000</label>
                                        </div>
                                    </div>
                                </div>

                                <div  align="center">
                                    
                                    <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="Realizar pago">
                                    <div id="simple-msg"></div>
                               
                                </div>      
</form>

@endsection