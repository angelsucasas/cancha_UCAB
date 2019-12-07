@extends('layouts.prueba')
@section('content')   

@if(isset($message))  
<div class="container">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{$message}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
</div>
@endif

<!-- Page Content -->
<div class="container ">
    <div class="row">

        <div class="col-sm-12 col-md-3 collapse show" id="left-panel">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="subj-group-tab" data-toggle="tab" href="#subj-group" role="tab" aria-controls="subj-group" aria-selected="true">Buscador</a>
                </li>
              
            </ul>
            <div class="tab-content" id="myTabContent2">
                <div class="tab-pane fade show active" id="subj-group" role="tabpanel" aria-labelledby="subj-group-tab">
                    <form class="form" method="GET" action="/update">
                        {{ csrf_field() }}
                        <br>
                        {!! Form::select('eve', $nom_eve, null, ['class' => 'cities']) !!}
                        
                        
                        <button type="submit" class="btn btn-outline-danger mb-2 mr-1"> Agregar </button>
                        
                    </form>  
                </div>    
                <div class="tab-pane fade" id="only-sub" role="tabpanel" aria-labelledby="only-sub-tab">
                    <form class="form" method="GET" action="/">
                        {{ csrf_field() }}
                        <input type="text" class="form-control mb-2" placeholder="E2" name="key">
                        <button type="submit" class="btn btn-outline-danger mb-2 mr-1"> Buscar </button>
                    </form>  
                </div> 
            </div>            
        </div>

        <div class="col-sm-12 col-md-9" id="myContent">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="list-sub-tab" data-toggle="tab" href="#list-sub" role="tab" aria-controls="list-sub" aria-selected="true">Buscar Eventos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="horario-tab" data-toggle="tab" href="#horario" role="tab" aria-controls="horario" aria-selected="false">Horario</a>
                </li>
            </ul>
            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active table-responsive" id="list-sub" role="tabpanel" aria-labelledby="list-sub-tab">
                @isset($subjects)
                    <table class="table table-striped" id="myTable-info">
                        <thead>
                            <tr>
                                <th>Clave</th>
                                <th>Grupo</th>
                                <th>Evento</th>
                                <th>Host</th>
                                <th>Horario</th>
                                <th>Días</th>
                                <!--th>Cupo</th-->
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($subjects as $subject)
                            <tr>
                                <td>{{ $subject['key'] }}</td>
                                <td>{{ $subject['gpo'] }}</td>
                                <td>{{ $subject['name'] }}</td>
                                <td>{{ $subject['profesor'] }}</td>
                                <td>{{ $subject['horario'] }}</td>
                                <td>{{ $subject['dias'] }}</td>
                                <!--td></td-->
                                <td>
                                    <a class="btn btn-success mb-2" href="/" role="button">Cambiar</a>
                                </td>
                                <td>
                                <a class="btn btn-danger mb-2" href="/flush/{{ $subject['key'] }}" role="button"> Remover </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                        
                    @else
                    <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                        <h1 class="display-4">¡Bienvenido!</h1>
                        <p class="lead">Agrega eventos en el panel que aparece a tu izquierda.</p>
                    </div>
                    </div> 
                    @endif              
                
                </div>
                <div class="tab-pane fade table-responsive" id="horario" role="tabpanel" aria-labelledby="horario-tab">
                </div>
            </div>    
        </div>      
    </div>
</div>
<!-- /.container -->
@endsection
