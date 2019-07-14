<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Investigacion;

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

        return view('investigacion.detail', compact('investigacion'));
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
