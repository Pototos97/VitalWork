<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Caffeinated\Shinobi\Models\Role;
use Validator;
use Illuminate\Support\Facades\Auth;
use App\especialidad;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {




    $users=User::with('usu')->get();

    //dd($users[0]->usu);
        return view('users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $complete= especialidad::all();
         return view('users.partials.create',compact('complete'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if (auth()->user()->hasRole('Admin')) {

        $Registro = new User;
        $Registro->Cedula = $request->identificación;
        $Registro->Nombre1 = $request->Nombre1;
        $Registro->Nombre2 = $request->Nombre2;
        $Registro->Apellido1 = $request->Apellido1;
        $Registro->Apellido2 = $request->Apellido2;
        $Registro->email = $request->Correo;
        $Registro->password = Hash::make($request->password);
        $Registro->Id_EstadoUsuario = 1;
        $Registro->Tipo_Documento = $request->docu;
        $Registro->Tarjeta_Profesional = $request->Tarjetap;
        $Registro->Fecha_Registro;
        $Registro->Genero = $request->genero;
        $Registro->Direccion = $request->direccion;
        $Registro->Celular = $request->celular;
        $Registro->Telefono = $request->telefono;
        $roles = especialidad::select('Id_Especialidad')->where('Nombre_Especialidad','=',$_POST["especialidad"])->get();
        $Registro->Id_Especialidad = $roles[0]->Id_Especialidad;
       $Registro->save();

       // $roles = Role::get();
        $Registro->assignRoles('Profesional');

return redirect()->route('users.index')->with('info', 'Usuario registrado con exito');
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




//Cambio de contraseña

     public function password(){
        return View('users.password');
    }


     public function updatePassword(Request $request){
        $rules = [
            'mypassword' => 'required',
            'password' => 'required|confirmed|min:6|max:18',
        ];
        
        $messages = [
            'mypassword.required' => 'El campo es requerido',
            'password.required' => 'El campo es requerido',
            'password.confirmed' => 'Los passwords no coinciden',
            'password.min' => 'El mínimo permitido son 6 caracteres',
            'password.max' => 'El máximo permitido son 18 caracteres',
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()){
            return redirect('user/password')->withErrors($validator);
        }
        else{
            if (Hash::check($request->mypassword, Auth::user()->password)){
                $user = new User;
                $user->where('email', '=', Auth::user()->email)
                     ->update(['password' => bcrypt($request->password)]);
                return redirect('home')->with('status', 'Password cambiado con éxito');
            }
            else
            {
                return redirect('user/password')->with('message', 'Credenciales incorrectas');
            }
        }
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
        $users= User::find($id);

          return view('users.partials.edit',compact('users'));     


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
        
        $users = User::find($id);
        $users->Cedula = $request->identificación;
        $users->Nombre1 = $request->Nombre1;
        $users->Nombre2 = $request->Nombre2;
        $users->Apellido1 = $request->Apellido1;
        $users->Apellido2 = $request->Apellido2;
        $users->email = $request->Correo;
        $users->Tarjeta_Profesional = $request->Tarjetap;
        $users->Direccion = $request->direccion;
        $users->Celular = $request->celular;
        $users->Telefono = $request->telefono;

        $users->save();
          return redirect()->route('users.index');     


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
