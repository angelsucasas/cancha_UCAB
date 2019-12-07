<?php

namespace App\Http\Controllers\horario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use  App\modeloH\Subject;
use  App\modeloH\Group;
use \Datetime;
use Illuminate\Support\Facades\DB;

class ScheduleController extends \App\Http\Controllers\Controller{

    public function update(request $request){
        $buscar_evento=DB::select('SELECT e.name as nombre, e.id as id
                                    FROM `subjects` as e');

            $contador_evento=0;
            $nom_eve=array();

            while(!empty($buscar_evento[$contador_evento])){
                $nom_eve[$contador_evento]=$buscar_evento[$contador_evento]->nombre;
                $contador_evento=$contador_evento+1;
            }

            
        $k = $buscar_evento[$request->eve]->id;
        $g = 1;

        $error = false;
        do {
            if ($k == "" && $g == "") {
                $error = 'Uno de los campos se encuentra vacío.';
                break;
            }
            $s = \App\modeloH\Subject::find($k);
            if (!$s) {
                $error = 'Evento no encontrada.';
                break;
            }

            $groups = $s->groups()->get()->where('gpo',$g);
            
            if (count ( $groups ) <= 0){
                $error ='ya no esta disponible el evento solicitad';
                break;
            }

            if ($this->isSubjectOnSession($s->id)){
                $error = 'el evento solicitada ya esta en la lista.';
                break;
            }

            if($this->subjectOverlaps($groups)){
                $error = 'el evento solicitado choca con otro.';
                break;
            }

            \Session::push('subjects',$this->createNewSub($s,$groups));  
            
    
            return view ( 'welcome' ,compact('nom_eve'))
            ->with('subjects',\Session::get('subjects'));


        } while (false);

        if ($error)
       
            return view('welcome',compact('nom_eve'))
            ->with('subjects',\Session::get('subjects'))
            ->withMessage ( $error );

    }


    function subjectOverlaps($gpos){

        $gpo_horario = [];
        $gpo_dias = [];

        foreach ($gpos as $gpo ) {
            $gpo_horario = explode(" a ",$gpo->horario);
            $gpo_dias = explode(", ",$gpo->dias);            
        }

        $subj_session = \Session::get('subjects');
        if($subj_session){
            foreach ($subj_session as $subj ) {
                $subj_horario = explode(" a ",$subj['horario']);
                $subj_dias = explode(", ",$subj['dias']);

                if (array_intersect($gpo_dias, $subj_dias)) 
                    if( $this->scheduleOverlapses($gpo_horario,$subj_horario))
                        return true;
            }
        }
        return false;
    }

    function scheduleOverlapses($h1,$h2){
        if ($this->timeOneIsGreeter($h1[0],$h2[0])){
            if ($this->timeOneIsGreeter($h2[1],$h1[0])) 
                return true;
        }else{
            if ($this->timeOneIsGreeter($h1[1],$h2[0])) 
                return true;        
        }
        return false;        
    }

    function timeOneIsGreeter($t1,$t2){
        return (strtotime($t1)>strtotime($t2)) ? true : false ;
    }

    function isSubjectOnSession($s_id){
                    
        if(\Session::get('subjects')!= null)
            foreach (\Session::get('subjects') as $subj ) 
                if ($s_id == $subj['key'])
                    return true;
        return false;       
    }

    function createNewSub($s,$groups){
        $new_sub = [];
        $new_sub['key'] = $s->id;
        $new_sub['name'] = $s->name;

        foreach ($groups as $gpo ) {
            $new_sub['gpo'] = $gpo->gpo;
            $new_sub['profesor'] = $gpo->profesor;
            $new_sub['horario'] = $gpo->horario;
            $new_sub['dias'] = $gpo->dias;            
        }
        return $new_sub;
    }

    public function flushbykey($key){
        $subj_session = \Session::get('subjects');

        if($subj_session != null){
            $i = 0;
            foreach ($subj_session as $subj ) {
                if ($key == $subj['key']){
                    unset($subj_session[$i]);  
                    // Re-index the array elements 
                    $subj_session = array_values($subj_session);
                
                    //este break aqui esta como forzado
                    break;
                }
                $i++;
            }
        }

        \Session::flush();
        foreach ($subj_session as $subj ) {
            \Session::push('subjects', $subj);  
        }
         $buscar_evento=DB::select('SELECT e.name as nombre, e.id as id
                                    FROM `subjects` as e');

            $contador_evento=0;
            $nom_eve=array();

            while(!empty($buscar_evento[$contador_evento])){
                $nom_eve[$contador_evento]=$buscar_evento[$contador_evento]->nombre;
                $contador_evento=$contador_evento+1;
            }

        return view('welcome',compact('nom_eve'))
        ->with('subjects',\Session::get('subjects'));
        
    }

    public function crear(){
        $buscar_evento=DB::select('SELECT e.name as nombre, e.id as id
                                    FROM `subjects` as e');

        $contador_evento=0;
        $nom_eve=array();

        while(!empty($buscar_evento[$contador_evento])){
        $nom_eve[$contador_evento]=$buscar_evento[$contador_evento]->nombre;
        $contador_evento=$contador_evento+1;
        }

        return  view('welcome', compact('nom_eve'));


    }

}

