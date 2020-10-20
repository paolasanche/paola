<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\alumnos;
use App\Request\alumnos as alumnoRequests;

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





    public function _construct(alumnos $alumnos){
        $this->alumnos = $alumnos;
        
        }


     
    public function store(Request $request)
    {
       
        $alumnos = $this->create($Request->all());
        return $alumnos;
        return response()->json (new alumnoRequests ($alumnos),201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */





    public function show($id)
    {
        $alumnos = alumnos::find($id);
        return $alumnos; 
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
        return $request;
        $alumnos->update($request->all());
        return response()->json($alumnos);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(alumnos $alumnos)
    {
        $alumnos -> delete();
        return response()->json('el registro ha sido eliminado correctamente');
    }
}
