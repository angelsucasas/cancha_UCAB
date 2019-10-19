<?php

namespace App\Http\Controllers\cancha;

use Illuminate\Http\Request;
use App\modeloC\equipo;
use Illuminate\Support\Facades\DB;
use App\modeloC\usuario_equipo;
use App\Http\Controllers\Auth;

class equipoControlador extends \App\Http\Controllers\Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buscaI=DB::select('SELECT e.nombre as nombre, u.name
                                        from equipo as e,usuario_equipo as ue, users as u 
                                        where (u.id=3) and (u.id=ue.fk_usuario) and (ue.fk_equipo=e.codigo_equipo) ');

        // Auth::user()->id

        if(!empty($buscaI)){

            $i=0;
            $nom_equi=array();
            
            while(!empty($buscaI[$i])){
                $nom_equi[$i]=$buscaI[$i]->nombre;
                $i=$i+1;
            }

            return view('cancha\equipo\index', compact('nom_equi'));
        }else{
            return('usted no esta registrado en ningun equipo');
        }
    }

    public function detail(){
        /*$investigacion = Investigacion::findOrFail($cod_inv);

        $pdi = $investigacion->preguntaDeInvestigacions->first()->pregunta_pdi;

        $consideracionp = $pdi->consideracionPersonals->first()->interes_del_investigador_cp;

        return view('investigacion.detail', compact('investigacion', 'pdi', 'consideracionp'));*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


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



    public function create(Request $request)
    {   
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function guardar(Request $request)
    {
        $equipo = new equipo;
        $equipo->nombre = $request->nom;

        $equipo->save();

            $busca1='SELECT u.name as nombre, u.id as cod
            from users as u, usuario_equipo as ue, equipo as e
            where !(u.id=ue.fk_usuario) 
            group by u.name, u.id';       

             $result2 = DB::select(DB::raw($busca1));

             $ue1=new usuario_equipo;
             $ue1->fk_usuario= $result2[$request->jugador1]->cod;
             $ue1->fk_equipo=$equipo->codigo_equipo;

             $ue1->save();
   
             $ue2=new usuario_equipo;
             $ue2->fk_usuario= $result2[$request->jugador2]->cod;
             $ue2->fk_equipo=$equipo->codigo_equipo;

             $ue2->save();
             
             $ue3=new usuario_equipo;
             $ue3->fk_usuario= $result2[$request->jugador3]->cod;
             $ue3->fk_equipo=$equipo->codigo_equipo;

             $ue3->save();

             $ue4=new usuario_equipo;
             $ue4->fk_usuario= $result2[$request->jugador4]->cod;
             $ue4->fk_equipo=$equipo->codigo_equipo;

             $ue4->save();

             $ue5=new usuario_equipo;
             $ue5->fk_usuario= $result2[$request->jugador5]->cod;
             $ue5->fk_equipo=$equipo->codigo_equipo;

             $ue5->save();

             $ue6=new usuario_equipo;
             $ue6->fk_usuario= $result2[$request->jugador6]->cod;
             $ue6->fk_equipo=$equipo->codigo_equipo;

             $ue6->save();

        //return redirect('/equipo/crear');
        return back()->with('mensaje', 'Investigacion Agregada!');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //$investigacion = Investigacion::findOrFail($cod_inv);
    }
}
