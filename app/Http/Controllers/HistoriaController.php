<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HistoriaC;
use App\User;
use Illuminate\Support\Facades\Auth;
use Session;

class HistoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

//$userAuth Captura la sesion y la guarda en $request
        $userAuth = Auth::User();
        $request->session()->put('usuario',$userAuth->id);

//Rol Paciente
if (auth()->user()->hasRole('Paciente')) {
$historiac=HistoriaC::with('consultar')->wherehas('consultar',function($query){
    $query->where('Id_Usuario','=',Session::get('usuario'));
})->paginate(5);
        return view('HistoriaClinica.indexpa', compact('historiac'));

}

//Rol Medico

elseif (auth()->user()->hasRole('Medico')) {
 $cedula = trim($request->get('search'));
 $historiac = HistoriaC::with('consultar')->wherehas('consultar',function($query)use($cedula){
   $query->where('Cedula','LIKE','%'. $cedula . '%');

 })->paginate(20);

         return view('HistoriaClinica.index', compact('historiac','cedula'));

}

//Rol administrador
elseif (auth()->user()->hasRole('Admin')) {

 $cedula = trim($request->get('search'));
 $historiac = HistoriaC::with('consultar')->wherehas('consultar',function($query)use($cedula){
   $query->where('Cedula','LIKE','%'. $cedula . '%');

 })->paginate(20);

         return view('HistoriaClinica.index', compact('historiac','cedula'));

}




        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         return view('HistoriaClinica.partials.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       


    $userAuth = Auth::User()->id;
            $historia = new HistoriaC;

            $historia->Edad=$request->edad;
            $historia->Antecedentes=implode(",",$request->Antecedentes);
            $historia->Peso=$request->Peso;
            $historia->Altura=$request->Altura;
            $historia->PresionA=$request->P_Arterial;
            $historia->Genero=$request->género;
            $historia->Fumador=$request->fumador;
            $historia->Alcohol=$request->Alcohol;
            $historia->Ejercicio=$request->Ejercicio;
            $historia->Id_Usuario=$userAuth;

           $historia->save();

             return redirect()->route('historiac.index')->with('info', 'Historia Clinica registrada con exito');


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
