<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\HistoriaSocial;
use Session;
use Auth;
use Redirect;

class HistoriaSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paci = Paciente::all();
        return view('HistoriaSocial.index', compact('paci'));

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
        $hs= HistoriaSocial::select('Id_HistoriaSocial')->Where('Id_Paciente','=',$idpa)->get();
    if ($hs != '[]') {
        return Redirect::to('/historias')->with('error','Este paciente ya cuenta con una historia social')->withInput();
      }else{
         Session::put('idpa',$idpa);
             return view('HistoriaSocial.partials.create');

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

          $historiaSocial = new HistoriaSocial();
          $historiaSocial->Fecha_Ingreso;
          $historiaSocial->Motivo_Ingreso = $request->motivoIngreso;
          $historiaSocial->Modalidad_Ingreso = $request->modalidadIngreso;
          $historiaSocial->Tarifa = $request->tarifa;
          $historiaSocial->Antecedentes = $request->antecedentes;
          $historiaSocial->Dinamica_Familiar = $request->dinamicaFamiliar;
          $historiaSocial->Factores_Protectores = $request->factoresProtectores;
          $historiaSocial->Factores_Riesgo = $request->factoresRiesgo;
          $historiaSocial->Redes_Sociales = $request->redesSociales;          
          $historiaSocial->Plan_Intervencion = $request->planIntervencion;
          $historiaSocial->Id_Paciente = Session::get('idpa');
          $historiaSocial->Id_Usuario = Session::get('user');
          $historiaSocial->save();

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
