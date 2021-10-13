<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $roles = Role::paginate(2);
        return view('roles.index', compact('roles'));

    }

 public function create()
    {

        $permissions = Permission::get();

        return view('roles.partials.create',compact('permissions'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $roles = Role::create($request->all());


    $roles->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $roles->id)->with('info', 'Datos guardados con exito');

    }

    public function show(Role $role)
    {
        //dd($Role->nota);
        
        return view('roles.partials.show', compact('role'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {

        $permissions = Permission::get();
        return view('Roles.partials.edit', compact('role','permissions'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {

//1.Actualice el rol 
//2.Actualice el permisos


//Actualizar el rol
        $role -> update($request->all());

        //Actualziar permisos
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.index', $role->id)->with('info', 'Rol actualizados con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $Role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return back()->with('info', 'Elimidado correctamente');
    }
}
