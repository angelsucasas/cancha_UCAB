@extends('layouts.master')

@section('content')
    
@endsection
<form method="POST" action="{{route('investigacion.store')}}">

<input type="text" name='enunciado_inv'>
{{csrf_field}}
<input type="submit" name="Enviar">

</form>