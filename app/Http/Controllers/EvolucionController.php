<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistoriaClinica;
use App\HistoriaSocial;
use App\Paciente;
use App\Evolucion;
use App\User;
use Session;
use Auth;
use Redirect;

class EvolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paci = Paciente::all();
        return view('Evolucion.index', compact('paci'));
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

    $historiac = HistoriaClinica::select('*')->Where('Id_Paciente','=',$id)->get();

if ($historiac == '[]') {

            return Redirect::to('/evolu')->with('error','Este paciente no cuenta con una historia Clinica con la cual asociar la evolucion')->withInput();
           } else {
                  Session::put('idpa',$idpa);
    return view('Evolucion.partials.create',compact('paciente'));

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
         
          $evolucion = new Evolucion();
          $evolucion->Fecha_Seguimiento;
          $evolucion->Observaciones = $request->evolucion;

           $historia = HistoriaClinica::select('Id_HistoriaClinica')->Where('Id_Paciente','=',Session::get('idpa'))->get();
        $evolucion->Id_HistoriaSocial = $historia[0]->Id_HistoriaClinica;
           //dd($evolucion);

          $evolucion->Id_Paciente = Session::get('idpa');
          $evolucion->Id_Usuario = Session::get('user');
          $evolucion->save();
          return redirect()->route('evolu.index')->with('info', 'Evolucion registrada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = HistoriaSocial::with('evol','paci')->find($id);  
        if (!isset($paciente)) {
    return Redirect::to('/historiac')->with('error','Este paciente No cuenta con una historia Clinica')->withInput();
        }
     return view('Evolucion.partials.show', compact('paciente'));
    }


     public function mostrarEvolucion($id)
    {
        $paciente = Evolucion::find($id);  
      /*  if (!isset($paciente)) {
    return Redirect::to('/historiac')->with('error','Este paciente No cuenta con una historia Clinica')->withInput();
        }*/
        //dd($paciente);
     return view('Evolucion.partials.mostrarE', compact('paciente'));
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
