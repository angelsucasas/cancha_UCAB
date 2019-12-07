<?php

namespace App\Http\Controllers;
use App\modeloC\suscripcion;
use Illuminate\Http\Request;

class gimnasioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
        
        //asociar un usuario al gimnasio

         return view('cancha\equipo\registrar',compact('solucion'));

    }




    public function mostrarSuscripcion(){

            //aqui ira la consulta de todos los usuarios asociados al gimnasio
            $buscar_suscripcion=DB::select('SELECT u.name as nombre
                                        FROM `suscripcion` as s, users as u
                                        WHERE (u.id=s-fk_usuario)');

            
            $contador_equipo=0;
            $nom_sus=array();

            while(!empty($buscar_suscripcion[$contador_equipo])){
                $nom_sus[$contador_equipo]=$buscar_suscripcion[$contador_equipo]->nombre;
                $contador_equipo=$contador_equipo+1;
            }

            //lista de todos los usuarios suscritos al gimnasio
          
    }



    public function eliminar(Request $request)
    {  
        $buscar_suscripcion=DB::select('SELECT u.id as codigo
        FROM `suscripcion` as s, users as u
        WHERE (u.id=s-fk_usuario)');

        $num_delete=$buscar_suscripcion[$request->sus]->codigo;

        $suscripcion= new suscripcion();
        $suscripcion= suscripcion::findOrFail($num_delete);
        $suscripcion->delete();

        //devuelve la ruta donde consultamos los usuarios suscritos
        


    }


    public function destroy(Request $request)
    {  
        //el request id nos devolvera la posicion de ese elemento en la tabla actual

        //por lo tanto tenemos que cargar la tabla, agarrar el elemento en esa posicion y borrarlo
        //de esa manera no afectamos a las llaves primarias y mantenemos la integridad de los datos
        $buscar_Equipo=DB::select('SELECT e.nombre as nombre,e.codigo_equipo
                                        from equipo as e');
      
                                            
        $equipo_a_eliminar=new equipo();

        $id_equipo=intval($buscar_Equipo[$request['equipo_elim']]->codigo_equipo);
        
        $equipo_a_eliminar = equipo::findOrFail($id_equipo);
        
        $equipo_a_eliminar->delete();

        return redirect('equipo\eliminar');
    }

    public function principal()
    { 
    
    
    }
}
