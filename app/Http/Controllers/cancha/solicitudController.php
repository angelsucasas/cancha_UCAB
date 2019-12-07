<?php

namespace App\Http\Controllers\cancha;

use auth;
use Illuminate\Http\Request;
use  App\modeloC\solicitud;
use Illuminate\Support\Facades\DB;

class solicitudController extends \App\Http\Controllers\Controller
{
    public function crear_solicitud()
    {
            $buscar_deporte=DB::select('SELECT d.nombre as nombre
            from deporte as d');

            $contador=0;
            $nom_dep=array();

            while(!empty($buscar_deporte[$contador])){
                $nom_dep[$contador]=$buscar_deporte[$contador]->nombre;
                $contador=$contador+1;

            }

            $buscar_Equipo=DB::select('SELECT e.nombre as nombre, u.name, e.codigo_equipo as cod
                                        from equipo as e,usuario_equipo as ue, users as u 
                                        where (u.id='.Auth::user()->id.') and (u.id=ue.fk_usuario) and (ue.fk_equipo=e.codigo_equipo) 
                                        GROUP BY e.nombre, u.name,e.codigo_equipo');

                                        $contador2=0;
                                        $nom_equi=array();
                            
                                        while(!empty($buscar_Equipo[$contador2])){
                                            $nom_equi[$contador2]=$buscar_Equipo[$contador2]->nombre;
                                            $contador2=$contador2+1;
                            
                                        }



            $horas=array('07:00','07:15','07:30', '07:45','08:00', '08:15','08:30', '08:45', '09:00', '09:15', '09:30','09:45','10:00','10:15','10:30','10:45','11:00','11:15','11:30','11:45','12:00','12:15','12:30','12:45','13:00','13:15','13:30','13:45','14:00','14:15','14:30','14:45','15:00','15:15','15:30','15:45','16:00','16:15','16:30','16:45','17:00','17:15','17:30','17:45','18:00','18:15','18:30','18:45','19:00','19:15','19:30','19:45','20:00','20:15','20:30','20:45','21:00','21:15','21:30','21:45','22:00','22:15','22:30','22:45','23:00');
            $dias=array('Lun','Mar', 'Jue' , 'Mie', 'Vie','Sab');
            $maximo=array("1","2","3");

             return view('cancha\solicitud\registrar',compact('nom_dep','horas','dias','nom_equi','maximo'));
        
    }




    public function ver_todas_las_solicitudes(){
        //dame las solicitudes por dia
        $buscar_solicitud_lunes=DB::select('SELECT e.nombre as equipo,s.hora_sol as hora,s.n_int as integrante, s.deporte as dep, s.dia_sol as dia ,s.codigo_solicitud as cs FROM `solicitud` as s, `equipo` as e where (dia_sol="Lun") and (s.fk_equipo=e.codigo_equipo)');
        $buscar_solicitud_martes=DB::select('SELECT e.nombre as equipo,s.hora_sol as hora,s.n_int as integrante, s.deporte as dep, s.dia_sol as dia ,s.codigo_solicitud as cs FROM `solicitud` as s, `equipo` as e where (dia_sol="Mar") and (s.fk_equipo=e.codigo_equipo)');
        $buscar_solicitud_miercoles=DB::select('SELECT e.nombre as equipo,s.hora_sol as hora,s.n_int as integrante, s.deporte as dep, s.dia_sol as dia ,s.codigo_solicitud as cs FROM `solicitud` as s, `equipo` as e where (dia_sol="Mie") and (s.fk_equipo=e.codigo_equipo)');
        $buscar_solicitud_jueves=DB::select('SELECT e.nombre as equipo,s.hora_sol as hora,s.n_int as integrante, s.deporte as dep, s.dia_sol as dia ,s.codigo_solicitud as cs FROM `solicitud` as s, `equipo` as e where (dia_sol="Jue") and (s.fk_equipo=e.codigo_equipo)');
        $buscar_solicitud_viernes=DB::select('SELECT e.nombre as equipo,s.hora_sol as hora,s.n_int as integrante, s.deporte as dep, s.dia_sol as dia ,s.codigo_solicitud as cs FROM `solicitud` as s, `equipo` as e where (dia_sol="Vie") and (s.fk_equipo=e.codigo_equipo)');
        $buscar_solicitud_sabado=DB::select('SELECT e.nombre as equipo,s.hora_sol as hora,s.n_int as integrante, s.deporte as dep, s.dia_sol as dia ,s.codigo_solicitud as cs FROM `solicitud` as s, `equipo` as e where (dia_sol="Sab") and (s.fk_equipo=e.codigo_equipo)');

        return view('cancha.solicitud.index', compact('buscar_solicitud_lunes','buscar_solicitud_martes','buscar_solicitud_miercoles','buscar_solicitud_jueves','buscar_solicitud_viernes','buscar_solicitud_sabado'));
    }



    public function ver_todos_los_solicitantes($codigo_sol){

        //dado el codigo de solicitud , dame sus solicitantes
        $buscar_solicitud=DB::select('SELECT u.name as nombre
                                        FROM `solicitud` as s, `sol_usu` as su, `users` as u 
                                        WHERE (s.codigo_solicitud='.$codigo_sol.') and (s.codigo_solicitud=su.fk_solicitud) and (su.fk_usuario=u.id)');

       
        return view('cancha.solicitud.solicitantes', compact('buscar_solicitud'));
    }



    public function guardar_solicitud(Request $request){


        $buscar_deporte=DB::select('SELECT d.codigo_deporte as cod,d.nombre as nombre
        from deporte as d');

    $buscar_Equipo=DB::select('SELECT e.nombre as nombre, u.name, e.codigo_equipo as cod
from equipo as e,usuario_equipo as ue, users as u 
where (u.id='.Auth::user()->id.') and (u.id=ue.fk_usuario) and (ue.fk_equipo=e.codigo_equipo) 
GROUP BY e.nombre, u.name,e.codigo_equipo');

        
        $horas=array('07:00','07:15','07:30', '07:45','08:00', '08:15','08:30', '08:45', '09:00', '09:15', '09:30','09:45','10:00','10:15','10:30','10:45','11:00','11:15','11:30','11:45','12:00','12:15','12:30','12:45','13:00','13:15','13:30','13:45','14:00','14:15','14:30','14:45','15:00','15:15','15:30','15:45','16:00','16:15','16:30','16:45','17:00','17:15','17:30','17:45','18:00','18:15','18:30','18:45','19:00','19:15','19:30','19:45','20:00','20:15','20:30','20:45','21:00','21:15','21:30','21:45','22:00','22:15','22:30','22:45','23:00');
      

        $dias=array('Lun','Mar', 'Jue' , 'Mie', 'Vie','Sab');
        $rel=($request->integrantes)+1;
        $numero=intval($buscar_Equipo[$request->equipo]->cod);
        $consulta=DB::select('INSERT `solicitud` (`hora_sol`,`fk_equipo`,`dia_sol`,`n_int`,`deporte`) VALUES ("'.$horas[$request->hora1].'","'.$numero.'","'.$dias[$request->dia].'","'.$rel.'","'.$buscar_deporte[$request->dep]->nombre.'")');
        
        return view('dashboard2')
             ->with('men',"solicitud registrada satisfactoriamente!");
    }



    
    public function guardar_solicitante($codigo_sol)
    {
        $buscar_solicitud=DB::select('INSERT `sol_usu` (fk_solicitud,fk_usuario) VALUES ('.$codigo_sol.','.Auth::user()->id.')');


        return view('dashboard2')
             ->with('men',"solicitud registrada satisfactoriamente!");
    }



    public function eliminar_sol()
    {  
        $buscar_Equipo=DB::select('SELECT e.nombre as nombre
                                        from equipo as e');

        $contador_equipo=0;
        $nom_equi=array();

        while(!empty($buscar_Equipo[$contador_equipo])){
            $nom_equi[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;
            $contador_equipo=$contador_equipo+1;
        }
        return view('cancha\equipo\eliminar',compact('nom_equi'));
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


    public function muestra_mis_sol(){
        $buscar_solicitud=DB::select('SELECT e.nombre as equipo,s.hora_sol as hora,s.n_int as integrante, s.deporte as dep, s.dia_sol as dia ,s.codigo_solicitud as cs FROM `solicitud` as s, `equipo` as e, (SELECT e.nombre as nombre, u.name, e.codigo_equipo as cod from equipo as e,usuario_equipo as ue, users as u where (u.id='.Auth::user()->id.') and (u.id=ue.fk_usuario) and (ue.fk_equipo=e.codigo_equipo) GROUP BY e.nombre, u.name,e.codigo_equipo) as equipos where (equipos.cod=e.codigo_equipo) and (s.fk_equipo=e.codigo_equipo)');
        return view('cancha.solicitud.misol', compact('buscar_solicitud'));
    }

    public function aceptar_sol($codigo_sol,$equipo)
    { 
        
        $buscar_solicitud_cod=DB::select('SELECT su.fk_usuario as usuario FROM `solicitud` as s, `sol_usu` as su  where  (s.codigo_solicitud='.$codigo_sol.') and (s.codigo_solicitud=su.fk_solicitud)');
       
        $buscar_solicitud=DB::select('INSERT `usuario_equipo`(`fk_usuario`,`fk_equipo`) VALUES ('.$buscar_solicitud_cod[0]->usuario.','.$equipo.')');
        
        
        return view('dashboard2')
             ->with('men',"solicitud aceptada, usuario agregado al equipo!");
    }

    public function elegir_solicitantes($codigo_sol){

        //dado el codigo de solicitud , dame sus solicitantes
        $buscar_solicitud=DB::select('SELECT u.name as nombre, s.codigo_solicitud as cs , s.fk_equipo as equipo
                                        FROM `solicitud` as s, `sol_usu` as su, `users` as u 
                                        WHERE (s.codigo_solicitud='.$codigo_sol.') and (s.codigo_solicitud=su.fk_solicitud) and (su.fk_usuario=u.id)');

       
        return view('cancha.solicitud.solicitantes2', compact('buscar_solicitud'));
    }
}
