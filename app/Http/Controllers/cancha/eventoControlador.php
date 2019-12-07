<?php

namespace App\Http\Controllers\cancha;
use Auth;
use Illuminate\Http\Request;
use  App\modeloH\subject;
use  App\modeloH\group;
use Illuminate\Support\Facades\DB;


class eventoControlador extends \App\Http\Controllers\Controller{
       

    public function ver_todos_los_eventos(){
        $buscar_Equipo=DB::select('SELECT e.nombre as nombre
                                        from evento as e');

        $contador_equipo=0;
        $nom_eve=array();

        while(!empty($buscar_Equipo[$contador_equipo])){
            $nom_eve[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;
            $contador_equipo=$contador_equipo+1;
        }
        return view('cancha\equipo\equipos', compact('nom_eve'));
    }



    public function crear(){
            $buscar_deporte=DB::select('SELECT d.nombre as nombre
            from deporte as d');

            $contador=0;
            $nom_dep=array();

            while(!empty($buscar_deporte[$contador])){
                $nom_dep[$contador]=$buscar_deporte[$contador]->nombre;
                $contador=$contador+1;
            }

            $horas=array('07:00','07:15','07:30', '07:45','08:00', '08:15','08:30', '08:45', '09:00', '09:15', '09:30','09:45','10:00','10:15','10:30','10:45','11:00','11:15','11:30','11:45','12:00','12:15','12:30','12:45','13:00','13:15','13:30','13:45','14:00','14:15','14:30','14:45','15:00','15:15','15:30','15:45','16:00','16:15','16:30','16:45','17:00','17:15','17:30','17:45','18:00','18:15','18:30','18:45','19:00','19:15','19:30','19:45','20:00','20:15','20:30','20:45','21:00','21:15','21:30','21:45','22:00','22:15','22:30','22:45','23:00');
            $dias=array('Lun','Mar' , 'Mie', 'Jue', 'Vie','Sab');

             return view('cancha\evento\reg2',compact('nom_dep','horas','dias'));
             
    }



    
    public function guardar(Request $request)
    {
        //aqui van las desviaciones de la tabla evento a subject
        $evento = new subject;
        $evento->name = $request->nom;

        //$evento->host =$request->host;
        
        /*$evento->dia_inicio=$request->dia;
        $evento->mes_inicio=$request->mes;
        $evento->año_inicio=$request->año;*/
        $evento->descripcion=$request->descripcion;

        $buscar_deporte=DB::select('SELECT d.codigo_deporte as cod
        from deporte as d');

        $evento->fk_deporte=$buscar_deporte[$request->dep]->cod;

        $evento->save();
        $horas=array('07:00','07:15','07:30', '07:45','08:00', '08:15','08:30', '08:45', '09:00', '09:15', '09:30','09:45','10:00','10:15','10:30','10:45','11:00','11:15','11:30','11:45','12:00','12:15','12:30','12:45','13:00','13:15','13:30','13:45','14:00','14:15','14:30','14:45','15:00','15:15','15:30','15:45','16:00','16:15','16:30','16:45','17:00','17:15','17:30','17:45','18:00','18:15','18:30','18:45','19:00','19:15','19:30','19:45','20:00','20:15','20:30','20:45','21:00','21:15','21:30','21:45','22:00','22:15','22:30','22:45','23:00');
        $hor_def=''.$horas[$request->hora1].' a '.$horas[$request->hora2].'';

        $group= new group;
        $group->subject_id=$evento->id;
        $group->gpo=1;
        $group->profesor=$request->host;

        $group->horario=$hor_def;
        $dias=array('Lun','Mar', 'Jue' , 'Mie', 'Vie','Sab');

        $group->dias=$dias[$request->dia];
        $group->save();

        return view('dashboard2')
             ->with('men',"evento registrado satisfactoriamente!");
    }


    public function eliminar()
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

        return view('dashboard2')
             ->with('men',"evento eliminado exitosamente!");
    }


    public function mostrar_eventos(){
        $buscar_Equipo_lunes=DB::select('SELECT s.name as nombre, d.nombre as dep ,g.profesor as res, g.horario as hora , g.dias as dia 
FROM `subjects` as s, `groups` as g, `deporte` as d 
WHERE (s.id=g.subject_id) and (s.fk_deporte=d.codigo_deporte) and (g.dias="Lun")');

$buscar_Equipo_martes=DB::select('SELECT s.name as nombre, d.nombre as dep ,g.profesor as res, g.horario as hora , g.dias as dia 
FROM `subjects` as s, `groups` as g, `deporte` as d 
WHERE (s.id=g.subject_id) and (s.fk_deporte=d.codigo_deporte) and (g.dias="Mar")');

        $buscar_Equipo_miercoles=DB::select('SELECT s.name as nombre, d.nombre as dep ,g.profesor as res, g.horario as hora , g.dias as dia 
FROM `subjects` as s, `groups` as g, `deporte` as d 
WHERE (s.id=g.subject_id) and (s.fk_deporte=d.codigo_deporte) and (g.dias="Mie")');

$buscar_Equipo_jueves=DB::select('SELECT s.name as nombre, d.nombre as dep ,g.profesor as res, g.horario as hora , g.dias as dia 
FROM `subjects` as s, `groups` as g, `deporte` as d 
WHERE (s.id=g.subject_id) and (s.fk_deporte=d.codigo_deporte) and (g.dias="Jue")');

$buscar_Equipo_viernes=DB::select('SELECT s.name as nombre, d.nombre as dep ,g.profesor as res, g.horario as hora , g.dias as dia 
FROM `subjects` as s, `groups` as g, `deporte` as d 
WHERE (s.id=g.subject_id) and (s.fk_deporte=d.codigo_deporte) and (g.dias="Vie")');

$buscar_Equipo_sabado=DB::select('SELECT s.name as nombre, d.nombre as dep ,g.profesor as res, g.horario as hora , g.dias as dia 
FROM `subjects` as s, `groups` as g, `deporte` as d 
WHERE (s.id=g.subject_id) and (s.fk_deporte=d.codigo_deporte) and (g.dias="Sab")');

        return view('cancha.evento.index',compact('buscar_Equipo_lunes','buscar_Equipo_martes','buscar_Equipo_miercoles','buscar_Equipo_jueves','buscar_Equipo_viernes','buscar_Equipo_sabado'));

    }

}
