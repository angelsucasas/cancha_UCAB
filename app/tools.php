<?php
 
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class tools
{

    public function get_ran($minimo,$maximo){
        $random1=rand($minimo,$maximo);

        $random2=rand($minimo,$maximo);

        //en caso de que se genere el mismo numero una y otra vez
        $salida=0;

        //garantizamos que sean diferentes y analizamos los casos bordes
        while($random2==$random1){
            $random2=rand($minimo,$maximo);
            $salida=$salida+1;
            //dado el caso de que se repita el numero 5 veces
                if($salida==5){
                    if($random2==$maximo){
                        $random2=$random2-1;
                    }
                    else if($random2==$minimo){
                        $random2=$random2+1;
                    }
                    else{
                        $random2=$random2-1;
                    }
                }
        }
        //compactamos ambos resultados en un array
        $resultado=array($random1,$random2);
        return($resultado);
    }

    public function reformar($todos,$excluido1,$excluido2,$maximo){
        $restantes=array();
        $contador_todos=1;
        $contador_restantes=1;

        while($contador_todos<=$maximo){
        if(($contador_todos==$excluido1)||($contador_todos==$excluido2)){
            $contador_todos=$contador_todos+1;
        }else{
            $restantes[$contador_restantes]=$todos[$contador_todos];
            $contador_restantes=$contador_restantes+1;
            $contador_todos=$contador_todos+1;
        }
        }

        return($restantes);
    }


    /*public function ubicar_codigo($emparejados,$maximo){
        $salida=0;
        $codigo_emp=array();
        while($salida<$maximo){
        $buscar_codigo_equipo=DB::select('SELECT e.codigo_equipo as codigo
                                          FROM `equipo` as e
                                          where (e.nombre="'.$emparejados[$salida].'")');

        $codigo_emp[$salida]= $buscar_codigo_equipo->codigo;
        $salida=$salida+1;
        }
        
        return ($codigo_emp);
        
    }*/

    public function asignar_punto($equipo){
        $buscar_codigo_equipo=DB::select('SELECT e.codigo_equipo as codigo
                                          FROM `equipo` as e
                                          where (e.nombre="'.$equipo.'")');

        $asignar_puntaje=DB::select('INSERT `clasificacion`(fk_equipo) VALUES('.$buscar_codigo_equipo[0]->codigo.')');
    }






    public function top_10(){
        
$busca_integrantes_por_nombre_equipo=DB::select('SELECT u.name as nombre 
                                                        FROM users as u, equipo as e, usuario_equipo as ue 
                                                        WHERE (e.nombre="'.$equipo.'") and (e.codigo_equipo=ue.fk_equipo) and (ue.fk_usuario=u.id)');
    
        $contador_equipo=0;
        $nom_equi=array();
        $no_guardes=0;
        $cont2=0;

        while(!empty($busca_integrantes_por_nombre_equipo[$contador_equipo])){
            //verifica que el nuevo no este en los anteriores
            if($contador_equipo>=1){
                
                $salida=0;
                while(!empty($nom_equi[$salida])){
                    if($nom_equi[$salida]==$busca_integrantes_por_nombre_equipo[$contador_equipo]->nombre){
                        $no_guardes=1;
                    }
                        $salida=$salida+1;
                    }
            }
            if(!$no_guardes){
                $nom_equi[$cont2]=$busca_integrantes_por_nombre_equipo[$contador_equipo]->nombre;
                $cont2=$cont2+1;
            }

            //$nom_equi[$contador_equipo]=$busca_integrantes_por_nombre_equipo[$contador_equipo]->nombre;
            $contador_equipo=$contador_equipo+1;
            $salida=0;
            $no_guardes=0;
        }

        return view('cancha\equipo\integrantes', compact('nom_equi','equipo'));
    }





    public function clasificacion(){
       //dame todos los equipos y compara
       $buscar_Equipo=DB::select('SELECT e.nombre as nombre, e.codigo_equipo as codigo
       from equipo as e');

$contador_equipo=0;
$nom_equi=array();


while(!empty($buscar_Equipo[$contador_equipo])){
    $contar_puntos=DB::select('SELECT COUNT(fk_equipo) as puntaje FROM `clasificacion` WHERE fk_equipo='.$buscar_Equipo[$contador_equipo]->codigo.'');
    $nom_equi[$contador_equipo]=$contar_puntos[0]->puntaje;
    $t_nom[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;
    $contador_equipo=$contador_equipo+1;
}

$cont=0;
$top10=array();
$actual=0;
$nom_def=array();

$lista_aux=array();
$lista_aux_nom=array();

$maximo=count($nom_equi);


while ($cont<$maximo){



if ($nom_equi[$cont]!=0){
    $conta2=0;
    $salida=0;

if($actual==0){
    $top10[$actual]=$nom_equi[$cont];
    $nom_def[$actual]=$t_nom[$cont];
    $actual=$actual+1;
    $salida=1;
    
}





while((!empty($top10[$conta2]))&&($salida!=1)){

if($top10[$conta2]<$nom_equi[$cont]){
    //tenemos los datos necesarios para mover los nombres
    $tam_top=count($top10);
    $pos_actual=$conta2;
    $conta_bajo=0;
 
    while($pos_actual<$tam_top){ 
        $lista_aux_nom[$conta_bajo]=$nom_def[$pos_actual];
        $conta_bajo=$conta_bajo+1;
        $pos_actual=$pos_actual+1;
    }

    $nom_def[$conta2]=$t_nom[$cont];

    $pos_actual=$conta2+1;
    $tam_top=$tam_top+1;
    $conta_bajo=0;

    while($pos_actual<$tam_top){ 
        $nom_def[$pos_actual]=$lista_aux_nom[$conta_bajo];
        $conta_bajo=$conta_bajo+1;
        $pos_actual=$pos_actual+1;
    }

    //fin ajuste nombres
    //--------------------//
    $tam_top=count($top10);
    $pos_actual=$conta2;
    $conta_bajo=0;

    while($pos_actual<$tam_top){ 
        $lista_aux[$conta_bajo]=$top10[$pos_actual];
        $conta_bajo=$conta_bajo+1;
        $pos_actual=$pos_actual+1;
    }

    $top10[$conta2]=$nom_equi[$cont];

    $pos_actual=$conta2+1;
    $tam_top=$tam_top+1;
    $conta_bajo=0;

    while($pos_actual<$tam_top){ 
        $top10[$pos_actual]=$lista_aux[$conta_bajo];
        $conta_bajo=$conta_bajo+1;
        $pos_actual=$pos_actual+1;
    }

    $salida=1;
}


//si esta en el borde y no hay nadie mayor que el, ponlo de ultimo
if(empty($top10[$conta2+1])){
  
    $top10[$conta2+1]=$nom_equi[$cont];
    $nom_def[$conta2+1]=$t_nom[$cont];

    $salida=1;
}

$conta2=$conta2+1;
} //final del while

}//final del primer if


$cont=$cont+1;

}
//$nom_def tiene el orde de los equipos que clasificaron
//$top10 tiene el puntaje de cada equipo

return($nom_def);

    }
}
    

