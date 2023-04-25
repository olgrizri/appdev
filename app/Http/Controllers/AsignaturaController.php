<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asignatura;
use Illuminate\Support\Facades\Redirect;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() 
    { 
        $this->middleware('auth'); 
    } 

    public function index(Request $request)
    {
        $asignaturas = Asignatura::orderBy('cod_asignatura','DESC')->paginate(3);
        
        return view('asignatura.index',compact('asignaturas'));
       
        // return view('persona.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles('admin');
        return view ('asignatura.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $asignaturas=new Asignatura(); 
        $asignaturas->cod_asignatura=$request->get('cod_asignatura'); 
        $asignaturas->nombre=$request->get('nombre');
        $asignaturas->creditos=$request->get('creditos'); 
    
        $asignaturas->save();
       
        return Redirect::to('asignatura');
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
        
        $personas=Asignatura::findOrFail($id);
        
        
        $personas->delete();


         return Redirect::to('asignatura');
    }
}
