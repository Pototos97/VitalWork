<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistoriaClinica;
use App\Paciente;
use App\User;
use Session;
use Auth;
use Redirect;

class HistoriaClinicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paci = Paciente::all();
        return view('HistoriaClinica.index', compact('paci'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
         $paciente = paciente::find($id);
          $idpa = $paciente->Id_Paciente;
    $hc= HistoriaClinica::select('Id_HistoriaClinica')->Where('Id_Paciente','=',$idpa)->get();
if ($hc != '[]') {

            return Redirect::to('/historiac')->with('error','Este paciente ya cuenta con una historia Clinica')->withInput();
           } else {
                  Session::put('idpa',$idpa);
    return view('HistoriaClinica.partials.create',compact('paciente'));

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
           $userAuth = Auth::User();

         Session::put('user',$userAuth->id);

          $historiaClinica = new HistoriaClinica();
          $historiaClinica->Fecha_Creacion;
          $historiaClinica->Motivo_Consulta = $request->motivoConsulta;
          $historiaClinica->Enfermedad_Actual = $request->enfermedadActual;
          $historiaClinica->Medicacion_Actual = $request->medicacionActual;
          $historiaClinica->Paraclinicos = $request->paraclinicos;
          $historiaClinica->Discapacidad=implode(",",$request->Discapacidad);
          $historiaClinica->Aspecto_General = $request->aspectoGeneral;
          $historiaClinica->T_A = $request->tensionA;
          $historiaClinica->Fre_Cardiaca = $request->frecuenciaC; 
          $historiaClinica->Pulso = $request->pulso;
          $historiaClinica->Fre_Respira = $request->frecuenciaR;
          $historiaClinica->Peso = $request->peso;
          $historiaClinica->Talla = $request->Talla;
          $historiaClinica->Factor_Riesgo = $request->factorR;
          $historiaClinica->Impresion_Diagnostica = $request->impresionD;


          $historiaClinica->Id_Paciente = Session::get('idpa');
          $historiaClinica->Id_Usuario = Session::get('user');
          $historiaClinica->save();
          return redirect()->route('historiac.index')->with('info', 'Historia Social registrado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $paciente = HistoriaClinica::find($id);  

        if (!isset($paciente)) {
    return Redirect::to('/historiac')->with('error','Este paciente No cuenta con una historia Clinica')->withInput();

        }

     return view('HistoriaClinica.partials.show', compact('paciente'));
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
