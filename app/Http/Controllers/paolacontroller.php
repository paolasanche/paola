<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\alumnos;
class paolacontroller extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getalumnos()
{
    $alumnos = array (
        
          'nombre' => 'paola',
          'apellido' => 'sanchez',
          'email' => 'al221811737@gmail.com',
          'edad' => '19',
          
    );
    return response()->json($alumnos);
     
}


    public function index()
    {
        $alumnos = alumnos::all();
        return response()->json(['alumnos' => $alumnos ]); 
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
       $alumnos = Create::all($request);
       return ('el registro alumno se ha guardadoo con exito');
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
