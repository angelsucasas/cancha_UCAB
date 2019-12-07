@extends('layouts.prueba')
@section('content')  


    <section  id="bracket">
    <form action="./next1" method="POST">
    {{csrf_field()}}
    <div class="posicionamiento-2">
    <div class="split split-one">
        <div class="round round-one current">
            <div class="round-details">Ronda 1<br/><span class="date"></span></div>
            <ul class="matchup">
                <li class="team team-top">
                
                {{Form::radio('choice0',$codigos_e[0])}}
                
                {{$emparejamiento[0]}}<span class="score"></span></li>
                <li class="team team-bottom">
                
                {{Form::radio('choice0',$codigos_e[1])}}
                
                {{$emparejamiento[1]}}<span class="score"></span></li>
            </ul>
            <ul class="matchup">
                <li class="team team-top">
                
                {{Form::radio('choice1',$codigos_e[2])}}
                
                {{$emparejamiento[2]}}<span class="score"></span></li>
                <li class="team team-bottom">
                
                {{Form::radio('choice1',$codigos_e[3])}}
                
                {{$emparejamiento[3]}}<span class="score"></span></li>
            </ul>
            <ul class="matchup">
                <li class="team team-top">
                
                {{Form::radio('choice2',$codigos_e[4])}}
                
                {{$emparejamiento[4]}}<span class="score"></span></li>
                <li class="team team-bottom">
                {{Form::radio('choice2',$codigos_e[5])}}
                
                {{$emparejamiento[5]}}<span class="score"></span></li>
            </ul>
            <ul class="matchup">
                <li class="team team-top">
                {{Form::radio('choice3',$codigos_e[6])}}
                
                {{$emparejamiento[6]}}<span class="score"></span></li>
                <li class="team team-bottom">
                {{Form::radio('choice3',$codigos_e[7])}}
                
                {{$emparejamiento[7]}}<span class="score"></span></li>
            </ul>                                     
        </div>  <!-- END ROUND ONE -->

        <div class="round round-two">
            <div class="round-details">Round 2<br/><span class="date"></span></div>         
            <ul class="matchup">
                <li class="team team-top"><span class="score">&nbsp;</span></li>
                <li class="team team-bottom"><span class="score">&nbsp;</span></li>
            </ul>   
            <ul class="matchup">
                <li class="team team-top"><span class="score">&nbsp;</span></li>
                <li class="team team-bottom"><span class="score">&nbsp;</span></li>
            </ul>   
                                                 
        </div>  <!-- END ROUND TWO -->
        
        <div class="round round-three">
            <div class="round-details">Ronda 3<br/><span class="date"></span></div>         
            <ul class="matchup">
                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
            </ul>   
                                              
        </div>  <!-- END ROUND THREE -->        
    </div> 

<div class="champion">
        
        <div class="final">
            <i class="fa fa-trophy"></i>
            <div class="round-details">Campeon <br/><span class="date"> </span></div>      
            <ul class ="matchup championship">
                <li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li>
                <li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li>
            </ul>
        </div>
         
    </div>


    <div class="split split-two">


        <div class="round round-three">
            <div class="round-details">Ronda 3<br/><span class="date"></span></div>                     
            <ul class="matchup">
                <li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li>
                <li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li>
            </ul>   
                                   
        </div>  <!-- END ROUND THREE -->    

        <div class="round round-two">
            <div class="round-details">Ronda 2<br/><span class="date"></span></div>                     
            <ul class="matchup">
                <li class="team team-top"><span class="score">&nbsp;</span></li>
                <li class="team team-bottom"><span class="score">&nbsp;</span></li>
            </ul>   
            <ul class="matchup">
                <li class="team team-top"><span class="score">&nbsp;</span></li>
                <li class="team team-bottom"><span class="score">&nbsp;</span></li>
            </ul>   
                                                 
        </div>  <!-- END ROUND TWO -->
        <div class="round round-one current">
            <div class="round-details">Ronda 1<br/><span class="date"></span></div>
            <ul class="matchup">
                <li class="team team-top">
                
                {{Form::radio('choice4',$codigos_e[8])}}
                
                {{$emparejamiento[8]}}<span class="score"></span></li>
                <li class="team team-bottom">
                
                {{Form::radio('choice4',$codigos_e[9])}}
                
                {{$emparejamiento[9]}}<span class="score"></span></li>
            </ul>
            <ul class="matchup">
            
                <li class="team team-top">
                
                {{Form::radio('choice5',$codigos_e[10])}}
                
                {{$emparejamiento[10]}}<span class="score"></span></li>
                <li class="team team-bottom">
                
                {{Form::radio('choice5',$codigos_e[11])}}
                
                {{$emparejamiento[11]}}<span class="score"></span></li>
            </ul>
            <ul class="matchup">
                <li class="team team-top">
                
                {{Form::radio('choice6',$codigos_e[12])}}
                
                {{$emparejamiento[12]}}<span class="score"></span></li>
                <li class="team team-bottom">
                
                {{Form::radio('choice6',$codigos_e[13])}}
                
                {{$emparejamiento[13]}}<span class="score"></span></li>
            </ul>
            <ul class="matchup">
                <li class="team team-top">
                
                {{Form::radio('choice7',$codigos_e[14])}}
                
                {{$emparejamiento[14]}}<span class="score"></span></li>
                <li class="team team-bottom">
                
                {{Form::radio('choice7',$codigos_e[15])}}
                
                {{$emparejamiento[15]}}<span class="score"></span></li>
            </ul>                                         
        </div>  <!-- END ROUND ONE -->                          
    </div>
    </div>
    <div align="center">
            <input type="submit" id="submit" name="send" class="submitBnt btn btn-danger" value="Enviar resultados">
            <div id="simple-msg"></div>
        </div>
    </form>
    </section>
   <br>
        
  
    

@endsection