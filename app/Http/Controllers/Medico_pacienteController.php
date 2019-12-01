<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medico_paciente;
use App\Medico;
use App\Paciente;


class Medico_pacienteController extends Controller
{


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
        $Medico_paciente = Medico_pacientes::all();

        return view('medico_pacientes/index',['medico_pacientes'=>$medico_pacientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicos = Medico::all()->pluck('full_name','id');

        $pacientes = Paciente::all()->pluck('full_name','id');


        return view('medico_pacientes/create',['medicos'=>$medicos, 'pacientes'=>$pacientes]);
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
            'medico_id' => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id',

        ]);

        $medico_paciente = new Medico_paciente($request->all());
        $medico_paciente->save();


        flash('Medico_paciente creada correctamente');

        return redirect()->route('medico_pacientes.index');
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

        $medico_paciente = Medico_paciente::find($id);

        $medicos = Medico::all()->pluck('full_name','id');

        $pacientes = Paciente::all()->pluck('full_name','id');


        return view('medico_pacientes/edit',['medico_paciente'=> $medico_paciente, 'medicos'=>$medicos, 'pacientes'=>$pacientes]);
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
            'medico_id' => 'required|exists:medicos,id',
            'paciente_id' => 'required|exists:pacientes,id',

        ]);
        $medico_paciente = Medico_paciente::find($id);
        $medico_paciente->fill($request->all());

        $medico_paciente->save();

        flash('Medico_paciente modificada correctamente');

        return redirect()->route('medico_pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medico_paciente = Medico_paciente::find($id);
        $medico_paciente->delete();
        flash('Medico_paciente borrada correctamente');

        return redirect()->route('medico_pacientes.index');
    }
}
