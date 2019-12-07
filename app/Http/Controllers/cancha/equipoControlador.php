<?php

namespace App\Http\Controllers\cancha;
use Auth;
use Illuminate\Http\Request;
use App\modeloC\equipo;
use Illuminate\Support\Facades\DB;
use App\modeloC\usuario_equipo;
use App\tools;


class equipoControlador extends \App\Http\Controllers\Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //falta cambiar el id seteado de alli por el 
        // Auth::user()->id

        
        $buscar_Equipo=DB::select('SELECT e.nombre as nombre, u.name, e.codigo_equipo as cod
                                        from equipo as e,usuario_equipo as ue, users as u 
                                        where (u.id='.Auth::user()->id.') and (u.id=ue.fk_usuario) and (ue.fk_equipo=e.codigo_equipo) 
                                        GROUP BY e.nombre, u.name,e.codigo_equipo');

        $cuenta_equipos=DB::select('SELECT count(e.nombre) as cuenta
                                    from equipo as e,usuario_equipo as ue, users as u 
                                     where (u.id='.Auth::user()->id.') and (u.id=ue.fk_usuario) and (ue.fk_equipo=e.codigo_equipo)');

        if(!empty($buscar_Equipo)){
            
            //verificamos si se encuentra en mas de un equipo
            //falta la condicional en caso de que sean diferentes equipos con diferentes estudiantes
            //contar el num de equipos, si es mayor que 1, buscar sus integrantes de manera organizada
            
            $conversion_objeto_int=intval($cuenta_equipos[0]->cuenta);
            $contador_integrantes=0;
            $nombre_integrantes=array();
            if($conversion_objeto_int>1){
                //metelos todos en una sola matriz y has un for en el blade
                $llenar_matrices=0;
                
                while($llenar_matrices<$conversion_objeto_int){

                    //dado el nombre de un equipo dame sus integrantes
                    $busca_integrantes_por_nombre_equipo=DB::select('SELECT u.name as nombre 
                                                                    FROM users as u, equipo as e, usuario_equipo as ue 
                                                                    WHERE (e.nombre="la sociedad del dinero") and (e.codigo_equipo=ue.fk_equipo) and (ue.fk_usuario=u.id)');
                    //falta concatenar el objeto con el query con el contador
                    //e ir recorriendo el array de nombres

                    while(!empty($busca_integrantes_por_nombre_equipo[$contador_integrantes])){
                        $nombre_integrantes[$contador_integrantes]=$busca_integrantes_por_nombre_equipo[$contador_integrantes]->nombre;
                        $contador_integrantes=$contador_integrantes+1;
                    }
                    
                    $llenar_matrices=$llenar_matrices+1;
                    $bandera_multiples_equipos=1;
                    //esto nos da como resultado una matriz indefinida donde cada 6 espacios se completan los integrantes de un equipo
                    //el equipo sociedad del dinero 2 , tiene 5, poner required en el html de ingreso
                }
            }else{
            //si no significa que esta en un solo equipo

            //estos while son para meter el contenido de los objetos 
            //en array para que puedan ser mostrados en el blade

            //dado el codigo de un equipo dame sus jugadores
            $buscar_integrantes=DB::select('SELECT u.name as nombre 
                                FROM users as u, equipo as e, usuario_equipo as ue 
                                WHERE (e.codigo_equipo='.$buscar_Equipo[0]->cod.') and (e.codigo_equipo=ue.fk_equipo) and (ue.fk_usuario=u.id)');
            
            
            
            $bandera_multiples_equipos=0;

            while(!empty($buscar_integrantes[$contador_integrantes])){
                $nombre_integrantes[$contador_integrantes]=$buscar_integrantes[$contador_integrantes]->nombre;
                $contador_integrantes=$contador_integrantes+1;
            }   
            }
            $contador_equipo=0;
            $nom_equi=array();
            
            while(!empty($buscar_Equipo[$contador_equipo])){
                $nom_equi[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;
                $contador_equipo=$contador_equipo+1;
            }

            return view('cancha\equipo\index', compact('nom_equi','nombre_integrantes','banderas_multiples_equipos'));
        
        }else{
            return('usted no esta registrado en ningun equipo');
        }
    }






    public function ver_todos_los_equipo(){
        $buscar_Equipo=DB::select('SELECT e.nombre as nombre, e.codigo_equipo as codigo
                                        from equipo as e');

        $contador_equipo=0;
        $nom_equi=array();

        while(!empty($buscar_Equipo[$contador_equipo])){
            $nom_equi[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;

            $contador_equipo=$contador_equipo+1;
        }

        return view('cancha\equipo\equipos', compact('nom_equi'));
    }





    public function crear(){

            $busca='SELECT u.name as nombre
            from users as u';       

             $result = DB::select(DB::raw($busca));
             

             /*aqui pasamos el objeto a array para que html lo pueda leer */
            $i=0;
            $solucion=array();
            
            while(!empty($result[$i])){
                $solucion[$i]=$result[$i]->nombre;
                $i=$i+1;
            }
            
             return view('cancha\equipo\registrar',compact('solucion'));
    }


    public function guardar(Request $request)
    {
        $equipo = new equipo;
        $equipo->nombre = $request->nom;

        $equipo->save();
        
        /*para saber que nombre toco en que posicion */

        $busca='SELECT u.id as id
        from users as u';       

         $result = DB::select(DB::raw($busca));
         

         /*aqui pasamos el objeto a array para que html lo pueda leer */
        $i=0;
        $solucion=array();
        
        while(!empty($result[$i])){
            $solucion[$i]=$result[$i]->id;
            $i=$i+1;
        }


             $ue1=new usuario_equipo;
             $ue1->fk_usuario= $solucion[$request->jugador1];
             $ue1->fk_equipo=$equipo->codigo_equipo;

             $ue1->save();
   
             $ue2=new usuario_equipo;
             $ue2->fk_usuario= $solucion[$request->jugador2];
             $ue2->fk_equipo=$equipo->codigo_equipo;

             $ue2->save();
             
             $ue3=new usuario_equipo;
             $ue3->fk_usuario= $solucion[$request->jugador3];
             $ue3->fk_equipo=$equipo->codigo_equipo;

             $ue3->save();

             $ue4=new usuario_equipo;
             $ue4->fk_usuario= $solucion[$request->jugador4];
             $ue4->fk_equipo=$equipo->codigo_equipo;

             $ue4->save();

             $ue5=new usuario_equipo;
             $ue5->fk_usuario= $solucion[$request->jugador5];
             $ue5->fk_equipo=$equipo->codigo_equipo;

             $ue5->save();

             $ue6=new usuario_equipo;
             $ue6->fk_usuario= $solucion[$request->jugador6];
             $ue6->fk_equipo=$equipo->codigo_equipo;

             $ue6->save();
             
             
             return view('dashboard2')
             ->with('men',"equipo registrado satisfactoriamente!");
        
       
    }

    public function eliminar()
    {  
        $buscar_Equipo=DB::select('SELECT e.nombre as nombre, u.name, e.codigo_equipo as cod
                                        from equipo as e,usuario_equipo as ue, users as u 
                                        where (u.id='.Auth::user()->id.') and (u.id=ue.fk_usuario) and (ue.fk_equipo=e.codigo_equipo) 
                                        GROUP BY e.nombre, u.name,e.codigo_equipo');

        $contador_equipo=0;
        $nom_equi=array();

        while(!empty($buscar_Equipo[$contador_equipo])){
            $nom_equi[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;
            $contador_equipo=$contador_equipo+1;
        }
        return view('cancha\equipo\eliminar',compact('nom_equi'));
   
  ;
    }


    public function destroy(Request $request)
    {  
        //el request id nos devolvera la posicion de ese elemento en la tabla actual

        //por lo tanto tenemos que cargar la tabla, agarrar el elemento en esa posicion y borrarlo
        //de esa manera no afectamos a las llaves primarias y mantenemos la integridad de los datos
        $buscar_Equipo=DB::select('SELECT e.nombre as nombre, u.name, e.codigo_equipo 
                                        from equipo as e,usuario_equipo as ue, users as u 
                                        where (u.id='.Auth::user()->id.') and (u.id=ue.fk_usuario) and (ue.fk_equipo=e.codigo_equipo) 
                                        GROUP BY e.nombre, u.name,e.codigo_equipo');
      
                                            
        $equipo_a_eliminar=new equipo();

        $id_equipo=intval($buscar_Equipo[$request['equipo_elim']]->codigo_equipo);
        
        $equipo_a_eliminar = equipo::findOrFail($id_equipo);
        
        $equipo_a_eliminar->delete();

        return view('dashboard2')
        ->with('men',"equipo eliminado exitosamente!");
    }

    public function mostrar_integrantes($equipo)
    { 
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

return view('clasificacion.index',compact('nom_def','top10'));

    }
    
}
