@extends('layouts.prueba')
@section('content')  

<section  id="bracket">
    <form action="./next4" method="post">
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
                <li class="team team-top">
                {{Form::radio('choice0',$codigos_e[0])}}
                {{$emparejamiento[0]}}</span></li>
                
                <li class="team team-bottom">{{Form::radio('choice0',$codigos_e[1])}}
                {{$emparejamiento[1]}}</span></li>
            </ul>   
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
    <br>
 <div align="center" >
            <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="Enviar resultados">
            <div id="simple-msg"></div>
        </div>
       
    </form>
    </section>
   <br>
        
  
    

@endsection