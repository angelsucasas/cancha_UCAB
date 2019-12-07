@extends('layouts.prueba')
@section('content')  

<section  id="bracket">
    
    {{csrf_field()}}
    <div class="posicionamiento-2">
    <div class="split split-one">
        <div class="round round-two">
            <div class="round-details">Ronda 2<br/><span class="date"></span></div>         
        </span></li>
            </ul>   
                                                 
        </div>  <!-- END ROUND TWO -->
        
        <div class="round round-three">
            <div class="round-details">Ronda 3<br/><span class="date"></span></div>         
            
                                              
        </div>  <!-- END ROUND THREE -->        
    </div> 

<div class="champion">
        
        <div class="final">
            <i class="fa fa-trophy"></i>
            <div class="round-details">Campeon <br/><span class="date"> </span></div>      
            <ul class="matchup">
                <li class="team team-top">{{$emparejamiento[0]}}</span></li>
                
        </div>
         
    </div>


    <div class="split split-two">


        <div class="round round-three">
            <div class="round-details">Ronda 3<br/><span class="date"></span></div>                     
                 
        </div>  <!-- END ROUND THREE -->    

        <div class="round round-two">
            <div class="round-details">Ronda 2<br/><span class="date"></span></div>                     
              
                                                 
        </div>  <!-- END ROUND TWO -->
    
    </div>
    </div>
    <br>
    <br>
    <br>
   
    <div align="center">
        <a href="/dashboard"><h1>Volver al dashboard</h1></a>
    </div>
    </section>
   <br>
        
  
    

@endsection