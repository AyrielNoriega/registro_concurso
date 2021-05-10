<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Departamento;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
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
        //
    }

    /**
    
       * //  
      *  // $dep = Departamento::find(2);
      *  // foreach ($dep->ciudades as $key => $value) {
      *  //     echo ($value->ciudad);
     *   // } 
     * Display the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function show( Request $request)
    {
        // $dpto = Departamento::where('departamento', $request->depart )->get();
        $departamento = Departamento::find($request->id);

        // $idDep = \App\Models\Departamento::select('id')->where( 'departamento', $key )->get();
        $ciudad =$departamento->ciudades;

        foreach ($ciudad as $key => $value) {
                 $ciudades[] = $value;
          
        }
        // foreach ($ciudades as $key => $value) {
        //     $ciudadArray[] = $value->ciudad;
        // }

        return response()->json($ciudades, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudad $ciudad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ciudad $ciudad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciudad  $ciudad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudad $ciudad)
    {
        //
    }
}
