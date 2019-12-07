@extends('layouts.prueba')
@section('content')   
<!-- Begin page content -->

  
  <form action="/gimnasio/eliminar" method="POST">
    @csrf

    <h1 align="center">Eliminar suscripcion</h1>
    <hr>
   <h3 align="center">Seleccione el usuario al cual desea eliminar su sucripcion</h3>
    <br>
    <div class="form-group">
        {!! Form::select('sus', $nom_eve, null, ['class' => 'cities']) !!}
    </div> 
    <hr>
    <div align="center">
      <button   type="submit"  class="registerbtn" ><h4 align="center">Eliminar</h4></button>
    </div>
   
@endsection