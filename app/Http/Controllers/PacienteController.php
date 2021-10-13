<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Departamento;
use App\Ciudad;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          

        $paci = Paciente::all();
        return view('paciente.index', compact('paci'));

        
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    $departamento = Departamento::pluck('Nombre_Departamento','Id_Departamento');
    //$depa= Departamento::all();
            $ciudad=Ciudad::all();
      //      dd($depa);

    return view('paciente.partials.create',compact('departamento'));

    }
 
  public function ciudades(Request $request, $id)
    {
        if ($request->ajax()) {
            $ciudad=Ciudad::ciudad($id);
    return response()->json($ciudad);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

if (auth()->user()->hasRole('Profesional')) {

        $paciente = new Paciente;
        $paciente->PaIdentificacion = $request->identificacion;
        $paciente->PaPrimer_Nombre = $request->Nombre1;
        $paciente->PaSegundo_Nombre = $request->Nombre2;
        $paciente->PaPrimer_Apellido = $request->Apellido1;
        $paciente->PaSegundo_Apellido = $request->Apellido2;
        $paciente->PaFecha_Nacimiento = $request->fechaNacimiento;
        $paciente->PaEscolaridad = $request->escolaridad;
        $paciente->PaOcupacion = $request->ocupacion;
        $paciente->PaPension=$request->pension;
        $paciente->PaGenero=$request->genero;
        $paciente->PaEstado_Civil = $request->estadoCivil;
        $paciente->PaEntidad = $request->entidad;
        $paciente->PaTelefono = $request->telefono;
        $paciente->PaPeso = $request->peso;
        $paciente->PaEstatura = $request->estatura;
        $paciente->PaRh = $request->rh;
        $paciente->Id_Ciudad = $request->ciudad;

        $paciente->save();


return redirect()->route('paciente.index')->with('info', 'paciente registrado con exito');
}

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
         $paciente= Paciente::find($id);

          return view('paciente.partials.edit',compact('paciente'));     


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
        

        $paciente = Paciente::find($id);

        $paciente->PaPrimer_Nombre = $request->Nombre1;
        $paciente->PaSegundo_Nombre = $request->Nombre2;
        $paciente->PaPrimer_Apellido = $request->Apellido1;
        $paciente->PaSegundo_Apellido = $request->Apellido2;
        $paciente->PaEscolaridad = $request->escolaridad;
        $paciente->PaOcupacion = $request->ocupacion;
        $paciente->PaPension=$request->pension;
        $paciente->PaGenero=$request->genero;
        $paciente->PaEstado_Civil = $request->estadoCivil;
        $paciente->PaEntidad = $request->entidad;
        $paciente->PaTelefono = $request->telefono;
        $paciente->PaPeso = $request->peso;
        $paciente->PaEstatura = $request->estatura;
        $paciente->PaRh = $request->rh;
        $paciente->save();

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
