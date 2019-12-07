<?php


namespace App\Http\Controllers\reycolina;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ReycolinaController extends \App\Http\Controllers\Controller
{





    public function iniciales(Request $request){
        $buscar_Equipo=DB::select('SELECT e.nombre as nombre, e.codigo_equipo as cod
                                        from `equipo` as e');

        $actuales=array();
        $cod_act=array();

        $actuales[0]=$buscar_Equipo[$request->nom1]->nombre;
        $actuales[1]=$buscar_Equipo[$request->nom2]->nombre;

        $cod_act[0]=$buscar_Equipo[$request->nom1]->cod;
        $cod_act[1]=$buscar_Equipo[$request->nom2]->cod;

        $desafiantes=array("");

        $guardar=DB::select('INSERT INTO `auxiliar` (nombre,codigo_equipo) VALUES ("'.$buscar_Equipo[$request->nom1]->nombre.'","'.$buscar_Equipo[$request->nom1]->cod.'")');
        $guardar=DB::select('INSERT INTO `auxiliar` (nombre,codigo_equipo) VALUES ("'.$buscar_Equipo[$request->nom2]->nombre.'","'.$buscar_Equipo[$request->nom1]->cod.'")');  

        $contador_equipo=0;
        $nom_equi=array();
        $cont2=0;

        while(!empty($buscar_Equipo[$contador_equipo])){
           
            $nom_equi[$cont2]=$buscar_Equipo[$contador_equipo]->nombre;
            $cont2=$cont2+1;
            
            
            $contador_equipo=$contador_equipo+1;
        }

        return view('colina/index',compact('actuales','desafiantes','nom_equi','cod_act'));
    }








    public function agregar(Request $request){
            $ajuste=($request->cod);

            $buscar_Equipo=DB::select('SELECT e.nombre as nombre,e.codigo_equipo as codi
                                        from equipo as e');

            //dado el nombre de un equipo dame su codigo
            $buscar_codigo_equipo=DB::select('SELECT e.codigo_equipo as codigo,e.nombre as nombre
                                                FROM `equipo` as e where (e.codigo_equipo='.$buscar_Equipo[$ajuste]->codi.')');

            $guardar=DB::select('INSERT INTO `auxiliar` (nombre,codigo_equipo) VALUES ("'.$buscar_codigo_equipo[0]->nombre.'","'.$buscar_codigo_equipo[0]->codigo.'")');  

            //carga la lista completa 
            $buscar_colina=DB::select('SELECT c.nombre as nombre, c.codigo_equipo as cod
                                                FROM `auxiliar` as c');
        
            $contador_equipo=0;

            $desafiantes=array();
            $actuales=array();
            $begin=0;
            $cod_act=array();

            while(!empty($buscar_colina[$contador_equipo])){
                if($contador_equipo<2){

                    $actuales[$contador_equipo]=$buscar_colina[$contador_equipo]->nombre;
                    $cod_act[$contador_equipo]=$buscar_colina[$contador_equipo]->cod;

                }else{

                    $desafiantes[$begin]=$buscar_colina[$contador_equipo]->nombre;
                    $begin=$begin+1;

                }
                $contador_equipo=$contador_equipo+1;
            }

            $contador_equipo=0;
            $nom_equi=array();

            $cont2=0;

            while(!empty($buscar_Equipo[$contador_equipo])){
                //if (($buscar_Equipo[$contador_equipo]->nombre!=$actuales[0])&&($buscar_Equipo[$contador_equipo]->nombre!=$actuales[1])){
                $nom_equi[$cont2]=$buscar_Equipo[$contador_equipo]->nombre;
                $cont2=$cont2+1;
                //}
                $contador_equipo=$contador_equipo+1;
            }

            return view('colina/index',compact('actuales','desafiantes','nom_equi','cod_act'));
            
    }








    public function mover(Request $request){

        $buscar_aux=DB::select('SELECT e.nombre as nombre,e.codigo_equipo as cod
                                        from `auxiliar` as e');

        $reset=DB::delete('DELETE FROM `auxiliar`'); 

        $actuales=array();
        $ultimo=array();
        $desafiantes=array();
        $cod_act=array();

        //estabas comparando un codigo con un nombre
        $buscar_codigo_equipo=DB::select('SELECT e.codigo_equipo as codigo,e.nombre as nombre
                                                FROM `equipo` as e where (e.codigo_equipo='.$request->gan.')');


        if ($buscar_aux[0]->nombre==$buscar_codigo_equipo[0]->nombre){
            $actuales[0]=$buscar_aux[0]->nombre;

            $ultimo[0]=$buscar_aux[1]->nombre;
            $ultimo[1]=$buscar_aux[1]->cod;

            $cod_act[0]=$buscar_aux[0]->cod;

            $guardar=DB::select('INSERT INTO `auxiliar` (nombre,codigo_equipo) VALUES ("'.$buscar_aux[0]->nombre.'","'.$buscar_aux[0]->cod.'")');
       


        }
        else if($buscar_aux[1]->nombre==$buscar_codigo_equipo[0]->nombre){

            $actuales[0]=$buscar_aux[1]->nombre;

            $ultimo[0]=$buscar_aux[0]->nombre;
            $ultimo[1]=$buscar_aux[0]->cod;

            $cod_act[0]=$buscar_aux[1]->cod;

            $guardar=DB::select('INSERT INTO `auxiliar` (nombre,codigo_equipo) VALUES ("'.$buscar_aux[1]->nombre.'","'.$buscar_aux[1]->cod.'")');
       
        }

        $actuales[1]=$buscar_aux[2]->nombre;
        $cod_act[1]=$buscar_aux[2]->cod;

        $guardar=DB::select('INSERT INTO `auxiliar` (nombre,codigo_equipo) VALUES ("'.$buscar_aux[2]->nombre.'","'.$buscar_aux[2]->cod.'")');
       
        
        $nom_equi=array();
        $cont2=0;

        $buscar_Equipo=DB::select('SELECT e.nombre as nombre
                                        from equipo as e');

        $contador_equipo=0;
        $nom_equi=array();

        while(!empty($buscar_Equipo[$contador_equipo])){
            $nom_equi[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;
            $contador_equipo=$contador_equipo+1;
        }

        $contador_equipo=3;
        while(!empty($buscar_aux[$contador_equipo])){        
            $desafiantes[$cont2]=$buscar_aux[$contador_equipo]->nombre;           
            $guardar=DB::select('INSERT INTO `auxiliar` (nombre,codigo_equipo) VALUES ("'.$buscar_aux[$contador_equipo]->nombre.'","'.$buscar_aux[$contador_equipo]->cod.'")');
            $contador_equipo=$contador_equipo+1;
            $cont2=$cont2+1;
        }

        $desafiantes[$cont2]=$ultimo[0];

        $guardar=DB::select('INSERT INTO `auxiliar` (nombre,codigo_equipo) VALUES ("'.$ultimo[0].'","'.$ultimo[1].'")');
       
        return view('colina/index',compact('actuales','desafiantes','nom_equi','cod_act'));

    }
    







    public function crear(){
        $buscar_Equipo=DB::select('SELECT e.nombre as nombre
                                        from equipo as e');

        $contador_equipo=0;
        $nom_equi=array();

        while(!empty($buscar_Equipo[$contador_equipo])){
            $nom_equi[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;
            $contador_equipo=$contador_equipo+1;
        }

        return view('colina/crear',compact('nom_equi'));
    }

    public function resetear(){
        $reset=DB::delete('DELETE FROM `auxiliar`'); 
        return redirect('colina\registro');
    }
}

