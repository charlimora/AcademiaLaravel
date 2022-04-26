<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //con el método all() traigo toda la información de la tabla como array
        $cursito = Curso::all();
        /*compact adjunta la información deseada a la vista
        para poderla usar en la vista */
        return view('cursos.index', compact('cursito'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Almacena un nuevo registro creado.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //all() me trae toda la información almacenada en $request
        //return $request->all();
        //crear una instancia del modelo Curso para manipular la tabla
        $cursito = new Curso();
        /*a través de la instancia llamo al campo nombre de la tabla curso
        y le asigno el valor que viene en el request*/
        $cursito->nombre = $request->input('nombre');
        $cursito->descripcion = $request->input('descripcion');

        /*
        validamos si viene un archivo desde el campo equis...
        luego en el campo imagen almacenamos el nombre del archivo
        que se va a guardar en storage/app/public e indicamos una subcarpeta
        de guardado para ser más ordenados
        */
        if($request->hasFile('imagen')){
            $cursito->imagen = $request->file('imagen')->store('public/cursos');
        }
        //le digo que guarde la información anterior con save()
        $cursito->save();
        return 'Curso creado exitosamente';
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
