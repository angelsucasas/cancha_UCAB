<?php

namespace App\Http\Controllers\gimnasio;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class suscripcionController extends \App\Http\Controllers\Controller
{

    public function ver_todas_las_suscripciones(){
        //consulta para ver los usuarios suscritos a gimnasio
        $buscar_Equipo=DB::select('SELECT u.name as nombre
                                    FROM `suscripcion` as s, `users` as u 
                                    where (s.fk_usuario=u.id)');

        $contador_equipo=0;
        $nom_eve=array();

        while(!empty($buscar_Equipo[$contador_equipo])){
            $nom_eve[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;
            $contador_equipo=$contador_equipo+1;
        }
        return view('gimnasio/index', compact('nom_eve'));
    }



    public function crear(){  
        $buscar_Equipo=DB::select('SELECT u.name as nombre
        FROM `suscripcion` as s, `users` as u 
        where (s.fk_usuario=u.id) and (u.name="'.Auth::user()->name.'")    ');

        /*$contador_equipo=0;
        $nom_eve=array();
        $registrado=0;

        while(!empty($buscar_Equipo[$contador_equipo])){
            $nom_eve[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;
             if($buscar_Equipo[$contador_equipo]->nombre==Auth::user()->name){
                 $registrado=1;
             }
            $contador_equipo=$contador_equipo+1;
        }*/
        
        if(empty($buscar_Equipo[0]->nombre)){
             $nom_dep=array("banesco","city wallet","mercantil","banco de venezuela"); 
             return view('gimnasio\suscripcion',compact('nom_dep'));
            
            }else{
                return redirect('/gimnasio/index');

            }
        }


    
    public function guardar()
    {   
        $guardar=DB::select('INSERT INTO `suscripcion` (fk_gimnasio,fk_usuario) VALUES("1","'.Auth::user()->id .'")'); 
        return redirect('/gimnasio/index');
    }


    public function destroy(){
        $buscar_Equipo=DB::select('SELECT u.name as nombre, u.id
        FROM `suscripcion` as s, `users` as u 
        where (s.fk_usuario=u.id)');

        $contador_equipo=0;
        $nom_eve=array();

        while(!empty($buscar_Equipo[$contador_equipo])){
            $nom_eve[$contador_equipo]=$buscar_Equipo[$contador_equipo]->nombre;
            $contador_equipo=$contador_equipo+1;
        }
        return view('gimnasio/eliminar', compact('nom_eve'));


    }

    public function eliminar(Request $request)
    {  
        $buscar_Equipo=DB::select('SELECT u.name as nombre, u.id
        FROM `suscripcion` as s, `users` as u 
        where (s.fk_usuario=u.id)');

        $guardar=DB::select('DELETE FROM `suscripcion` WHERE (fk_usuario="'.$buscar_Equipo[$request->sus]->id.'")'); 
        return view('dashboard2')
             ->with('men',"suscripcion eliminada exitosamente!");

    }


}
