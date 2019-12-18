<?php

namespace App\Http\Controllers;

use App\Tratamiento;
use App\MedTratamiento;
use Illuminate\Http\Request;

class MedTratamientoController extends Controller{
public function __construct()
{
    $this->middleware('auth');
}

/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
public function index()
{
    $medTratamientos = MedTratamiento::all();

    return view('medTratamientos/index',['medTratamientos'=>$medTratamientos]);

}

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
{
    //
    $tratamientos = Tratamiento::all()->pluck('nombre', 'id');

    return view('tratamientos/create',['tratamientos'=>$tratamientos]);

}

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
{
    $this->validate($request, [
        'nombre' => 'required|max:255',
        'fecha_inicio' => 'required|date|after:now',
        'fecha_fin' => 'required|date|after:now',
        'descripcion' => 'required|max:255',
        'tratamiento_id' => 'required|exists:tratamientos,id',
    ]);
    $medTratamiento = new MedTratamiento($request->all());
    $medTratamiento->save();

    // return redirect('medTratamientos');

    flash('MedTratamiento creado correctamente');

    return redirect()->route('medTratamientos.index');
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

    $medTratamiento = MedTratamiento::find($id);

    $tratamientos = Tratamiento::all()->pluck('nombre','id');


    return view('medTratamientos/edit',['medTratamiento'=> $medTratamiento, 'tratamientos'=>$tratamientos ]);
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
    $this->validate($request, [
        'nombre' => 'required|max:255',
        'fecha_inicio' => 'required|date|after:now',
        'fecha_fin' => 'required|date|after:now',
        'descripcion' => 'required|max:255',
        'tratamiento_id' => 'required|exists:tratamientos,id',

    ]);

    $medTratamiento = MedTratamiento::find($id);
    $medTratamiento->fill($request->all());

    $medTratamiento->save();

    flash('MedTratamiento modificado correctamente');

    return redirect()->route('medTratamientos.index');
}

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
public function destroy($id)
{
    $medTratamiento = MedTratamiento::find($id);
    $medTratamiento->delete();
    flash('MedTratamiento borrado correctamente');

    return redirect()->route('medTratamientos.index');
}
}
