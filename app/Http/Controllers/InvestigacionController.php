<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Investigacion;
use App\PreguntaDeInvestigacion;
use App\ConsideracionPersonal;
use App\ConsideracionSocial;

class InvestigacionController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $investigaciones = Investigacion::all();
        return view('investigacion.index', compact('investigaciones'));
    }

    public function detail($cod_inv){
        $investigacion = Investigacion::findOrFail($cod_inv);

        $pdi = $investigacion->preguntaDeInvestigacions->first()->pregunta_pdi;

        $consideracionp = $pdi->consideracionPersonals->first()->interes_del_investigador_cp;

        return view('investigacion.detail', compact('investigacion', 'pdi', 'consideracionp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function crear(Request $request){
        $investigacion = new Investigacion;
        $investigacion->enunciado_inv = $request->enunciado_inv;

        $investigacion->save();

        $consideracionp = new ConsideracionPersonal;
        $consideracionp->relacion_tema_expectativa = $request->relacion_tema_expectativa;
        $consideracionp->interes_del_investigador_cp = $request->interes_del_investigador_cp;
        $consideracionp->estudios_previos_cp = $request->estudios_previos_cp;
        $consideracionp->acceso_informacion_cp = $request->acceso_informacion_cp;
        $consideracionp->tiempo_recursos_cp = $request->tiempo_recursos_cp;
        $consideracionp->asesoria_orientacion_cp = $request->asesoria_orientacion_cp;
        $consideracionp->fk_pdi = $pdi->cod_pdi;

        $consideracionp->save();
        

        return back()->with('mensaje', 'Investigacion Agregada!');
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
    public function store(Request $request)
    {
        //return view('investigacion.store');
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
        //
    }
}
