@extends('layouts.prueba')
@section('content')   

                            <hr>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4><i class="fas fa-address-book"></i>Ver solicitudes </h4>
                                        <a href="/solicitud/todas"><img src="{{URL::asset('assets/app/images/manejarsol.jpg')}}"   alt="Snow" style="width:90%" > </a>    
                                    </div>
                                    <div class="col-lg-6">
                                        <h4><i class="fas fa-chalkboard-teacher"></i>Ver eventos</h4>
                                        <a href="/evento/index"><img src="{{URL::asset('assets/app/images/manejareve.jpg')}}"   alt="Snow" style="width:100%" ></a>   
                                    </div> 
                                </div>
                            <hr>
                                


@endsection


