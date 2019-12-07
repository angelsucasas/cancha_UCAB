<?php

namespace App\Http\Controllers\tournament_master;
use Illuminate\Http\Request;
use App\tools;
use App\modeloC\ronda;
use App\modeloC\torneom;
use App\Http\Controllers\tournament_master\knockoutGD;
use Illuminate\Support\Facades\DB;

class torneo extends \App\Http\Controllers\Controller
{
    public function iniciar(){
        $tipot=array("ronda suiza","eliminacion simple","liga");
        $num_participantes=array("4","8","16","32","64","128");

        return view('torneo.iniciar',compact('tipot','num_participantes'));
    }



    public function manejador()
    {
        error_reporting(E_ALL);

        // The knock-out class file contains two classes: "Knockout" and "KnockoutGD". KnockoutGD extends Knockout with GD-lib features (explained later).
        //include("class_knockout.php");
        
        // Depending on whether or not GD-lib is installed this example file will output differently.
        $GDLIB_INSTALLED = (function_exists("gd_info")) ? true : false;
        
        // Lets create a knock-out tournament between some of our dear physicists.
        $competitors=array();
        
         for ($alpha=1; $alpha<17; $alpha++)
        {
                $competitors[$alpha] = ''.$_POST['name'.$alpha.''].'';			
        
        }
        //ok, por ahora el unico tipo de emparejamiento que se hara es el de eliminacion simple entre 16 equipos
        //lo que implica un total de 4 rondas, y necesitaremos 5 listas

        //para resolver este problema usaramos 5 listas con el nombre de la ronda donde la primera lista de la primera ronda
        //tendra los integrantes, las demas listas corresponderan a las sig rondas.

        //nos ubicaremos en la ronda que este vacia, y preguntaremos de manera ascendente entre las listas

        //el problema seria guardar y cargar las rondas, en caso de que el usuario deje la pagina


        //aqui haremos los emparejamientos
        $min=1;
        $max=16;
        $max_o=$max;
        if($max%2){
            //es impar
            $competitors[$max+1]="relleno";
            $max=$max+1;
        }
        
        $emparejamiento=array();
        $pivote=0;
        $orden_codigos_emp=array();
        
        $generador= new tools();
        
        //mientras que existan 2 competidores sin parejas
        while ($competitors){
        //generamos 2 randoms diferentes
            $dame_2_randoms=array();
            $dame_2_randoms=$generador->get_ran($min,$max);
        
        //emparejamos
            $emparejamiento[$pivote]=$competitors[$dame_2_randoms[0]];
            $pivote=$pivote+1;
            $emparejamiento[$pivote]=$competitors[$dame_2_randoms[1]];
            $pivote=$pivote+1;

            
            $competitors=$generador->reformar($competitors,$dame_2_randoms[0],$dame_2_randoms[1],$max);
        
            $max=$max-2;
            
        }
        
        //$orden_codigos_emp=$generador->ubicar_codigo($emparejamiento,$max_o);
        

        /*if($competitor[0]){
            $emparejamiento[$pivote]=$competitor[0];
            $emparejamiento[$pivote+1]="bye";
        }*/
        
    
        $t= new torneom();
        $t->nombre=$_POST['tournament_name'];
        $t->save();


        $cont_guard=0;
        
        $buscar_codigo_equipo=DB::select('SELECT e.codigo_equipo as codigo,e.nombre as nombre
                                         FROM `equipo` as e');


        
        $codigos_e=array();
        
        while($cont_guard<=$max_o-1){
        
        $codigos_e[$cont_guard]=$buscar_codigo_equipo[$emparejamiento[$cont_guard]]->codigo;

        $emparejamiento[$cont_guard]=$buscar_codigo_equipo[$emparejamiento[$cont_guard]]->nombre;
        
        $cont_guard=$cont_guard+1;

        }

        $test=1;
        
        return view('torneo.bracket',compact('emparejamiento','codigos_e'));
    }
    
    
    public function index()
    {
        $buscar_Equipo=DB::select('SELECT e.nombre as nombre
                                        from equipo as e');

        $contador_equipo=0;
        $nom_equi=array();

        while(!empty($buscar_Equipo[$contador_equipo])){
            $nom_equi[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;
            $contador_equipo=$contador_equipo+1;
        }

        
        return view('torneo\index',compact('nom_equi'));
    }


 



public function next1(Request $request){
   
    $ganar_puntos=new tools();
    

    
    $buscar_codigo_equipo=DB::select('SELECT e.codigo_equipo as codigo,e.nombre as nombre
                                      FROM `equipo` as e');
    $emparejamiento=array();
    $codigos_e=array();
    $encontrado=0;
    $cont2=0;
    $ubicado=array();
    $alpha=0;


        while($alpha<=7){
            while(!empty($buscar_codigo_equipo[$cont2]->codigo)&&($encontrado!=1)){
                if($buscar_codigo_equipo[$cont2]->codigo==$request['choice'.$alpha.'']){
                    $ubicado[0]=$buscar_codigo_equipo[$cont2]->nombre;
                    $encontrado=1;
                }else{
                    $cont2=$cont2+1;
                }
            }
                $ganar_puntos->asignar_punto($ubicado[0]);
                $emparejamiento[$alpha] = $ubicado[0];	
                $codigos_e[$alpha]=$request['choice'.$alpha.''];
                $alpha=$alpha+1;
                $encontrado=0;
                $cont2=0;
            }

  
        return view('torneo.bracket2',compact('emparejamiento','codigos_e')); 
    }


    public function next2(Request $request){
   
        $ganar_puntos=new tools();
        $buscar_codigo_equipo=DB::select('SELECT e.codigo_equipo as codigo,e.nombre as nombre
                                          FROM `equipo` as e');
        $emparejamiento=array();
        $codigos_e=array();
        $encontrado=0;
        $cont2=0;
        $ubicado=array();
        $alpha=0;
            while($alpha<=3){
                while(!empty($buscar_codigo_equipo[$cont2]->codigo)&&($encontrado!=1)){
                    if($buscar_codigo_equipo[$cont2]->codigo==$request['choice'.$alpha.'']){
                        $ubicado[0]=$buscar_codigo_equipo[$cont2]->nombre;
                        $encontrado=1;
                    }else{
                        $cont2=$cont2+1;
                    }
                }
                    $ganar_puntos->asignar_punto($ubicado[0]);
                    $emparejamiento[$alpha] = $ubicado[0];	
                    $codigos_e[$alpha]=$request['choice'.$alpha.''];
                    $alpha=$alpha+1;
                    $encontrado=0;
                    $cont2=0;
                }
    
      
            return view('torneo.bracket3',compact('emparejamiento','codigos_e')); 
        }
    
        public function next3(Request $request){
   
            $ganar_puntos=new tools();
            $buscar_codigo_equipo=DB::select('SELECT e.codigo_equipo as codigo,e.nombre as nombre
                                              FROM `equipo` as e');
            $emparejamiento=array();
            $codigos_e=array();
            $encontrado=0;
            $cont2=0;
            $ubicado=array();
            $alpha=0;
                while($alpha<=3){
                    while(!empty($buscar_codigo_equipo[$cont2]->codigo)&&($encontrado!=1)){
                        if($buscar_codigo_equipo[$cont2]->codigo==$request['choice'.$alpha.'']){
                            $ubicado[0]=$buscar_codigo_equipo[$cont2]->nombre;
                            $encontrado=1;
                        }else{
                            $cont2=$cont2+1;
                        }
                    }
                        $ganar_puntos->asignar_punto($ubicado[0]);
                        $emparejamiento[$alpha] = $ubicado[0];	
                        $codigos_e[$alpha]=$request['choice'.$alpha.''];
                        $alpha=$alpha+1;
                        $encontrado=0;
                        $cont2=0;
                    }
        
          
                return view('torneo.bracket4',compact('emparejamiento','codigos_e')); 
            }

            public function next4(Request $request){
   
                $ganar_puntos=new tools();
                $buscar_codigo_equipo=DB::select('SELECT e.codigo_equipo as codigo,e.nombre as nombre
                                                  FROM `equipo` as e');
                $emparejamiento=array();
                $encontrado=0;
                $cont2=0;
                $ubicado=array();
                $alpha=0;
                   
                        while(!empty($buscar_codigo_equipo[$cont2]->codigo)&&($encontrado!=1)){
                            if($buscar_codigo_equipo[$cont2]->codigo==$request['choice'.$alpha.'']){
                                $ubicado[0]=$buscar_codigo_equipo[$cont2]->nombre;
                                $encontrado=1;
                            }else{
                                $cont2=$cont2+1;
                            }
                        }
                        
                            $ganar_puntos->asignar_punto($ubicado[0]);
                            $emparejamiento[$alpha] = $ubicado[0];	
                            

            
              
                    return view('torneo.bracket5',compact('emparejamiento')); 
                }

}

