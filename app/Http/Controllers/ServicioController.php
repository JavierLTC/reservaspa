<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$servicios = servicio::orderby('id', 'DESC');
        $servicios = \DB::table('servicio')
        ->join('servicio_lang', 'servicio.id', '=', 'servicio_lang.id_servicio')
        ->select('servicio.*', 'servicio_lang.*')->get();
        return view('servicios.servicio', compact('servicios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('servicios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['precio'=>'required']);
        \DB::table('servicio')->insert([
            ['precio' => $request->precio]
        ]);

        $this->validate($request,['nombre'=>'required', 'descripcion'=>'required', 'idioma'=>'required']);
        $last = \DB::getPdo()->lastInsertId();
        \DB::table('servicio_lang')->insert([
            ['id_servicio' => $last, 'nombre' => $request->nombre, 'descripcion' => $request->descripcion, 'id_lang' => $request->idioma]
        ]);
        return redirect()->route('servicios.index')->with('success','Registro creado satisfactoriamente');
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
