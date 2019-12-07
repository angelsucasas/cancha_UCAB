@extends('layouts.prueba')
@section('content')   
<!-- Begin page content -->

  
  <form action="/equipo/destroy" method="POST">
    @csrf

    <h1 align="center"><i class="fas fa-user-alt-slash"></i>Eliminar equipo</h1>
    <hr>
   <h3 align="center">Seleccione el equipo a eliminar</h3>
    <br>
    <div class="form-group">
        {!! Form::select('equipo_elim', $nom_equi, null, ['class' => 'cities']) !!}
    </div> 
    <hr>
    <div align="center">
      <button   type="submit"  class="registerbtn" ><h4 align="center">Eliminar</h4></button>
    </div>
   
@endsection