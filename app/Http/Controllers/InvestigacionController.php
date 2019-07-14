<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Investigacion;

use App\PreguntaDeInvestigacion;

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
        $pdis = PreguntaDeInvestigacion::all();
        return view('investigacion.index', compact('investigaciones','pdis'));
    }

    public function detail($cod_inv){
        
        $investigacion = Investigacion::findOrFail($cod_inv);

        $pdi = $investigacion->preguntaDeInvestigacions->first()->pregunta_pdi;

        //dd($pdi);

        //$pdi = Investigacion::find(1)->preguntaDeInvestigacions;
        //$pdi = $investigacion->preguntaDeInvestigacions($cod_inv)->pregunta_pdi;
        return view('investigacion.detail', compact('investigacion', 'pdi'));
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

        $pdi = new PreguntaDeInvestigacion;
        $pdi->pregunta_pdi = $request->pregunta_pdi;
        $pdi->fk_inv = $investigacion->cod_inv;

        $pdi->save();

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
