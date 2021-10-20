<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['register'=>false]);

Route::get('/home', 'HomeController@index')->name('home');


    Route::get('paciente/ciudad/{id}','PacienteController@ciudades');


Route::middleware(['auth'])->group(function(){

//Roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('can:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('can:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('can:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('can:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('can:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('can:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('can:roles.edit');


//Paciente

    Route::post('paciente/store', 'PacienteController@store')->name('paciente.store')
        ->middleware('can:paciente.create');

    Route::get('paciente', 'PacienteController@index')->name('paciente.index')
        ->middleware('can:paciente.index');

    Route::get('paciente/create', 'PacienteController@create')->name('paciente.create')
        ->middleware('can:paciente.create');

    Route::put('paciente/{pacient}', 'PacienteController@update')->name('paciente.update')
        ->middleware('can:paciente.edit');

    Route::get('paciente/{pacient}', 'PacienteController@show')->name('paciente.show')
        ->middleware('can:paciente.show');

    Route::delete('paciente/{pacient}', 'PacienteController@destroy')->name('paciente.destroy')
        ->middleware('can:paciente.destroy');

    Route::get('paciente/{pacient}/edit', 'PacienteController@edit')->name('paciente.edit')
        ->middleware('can:paciente.edit');

//HistoriaSocial

    Route::post('historias/store', 'HistoriaSocialController@store')->name('historias.store')
        ->middleware('can:historias.create');

    Route::get('historias', 'HistoriaSocialController@index')->name('historias.index')
        ->middleware('can:historias.index');

    Route::get('historias/{create}', 'HistoriaSocialController@create')->name('historias.create')
        ->middleware('can:historias.create');

    Route::put('historias/{historia}', 'HistoriaSocialController@update')->name('historias.update')
        ->middleware('can:historias.edit');

    Route::get('historiaso/{historia}', 'HistoriaSocialController@show')->name('historiaso.show')
        ->middleware('can:historiaso.show');

    Route::delete('historias/{historia}', 'PacienteController@destroy')->name('historias.destroy')
        ->middleware('can:historias.destroy');

    Route::get('historias/{historia}/edit', 'HistoriaSocialController@edit')->name('historias.edit')
        ->middleware('can:historias.edit');
        

        //Users 
    Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('can:users.index');
   //Mostrar usuarios registrados
    Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('can:users.show');
        //Eliminar usuarios
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('can:users.destroy');
        //Editar nombre y roles de usuario
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('can:users.edit');
 Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('can:users.edit');

       //Registro de usuarios
Route::get('user/create','UserController@create')->name('user.create')->middleware('can:user.create');
Route::post('user/store', 'UserController@store')->name('user.store')->middleware('can:user.create');

 //Rutas para cambiar la contraseña del usuario que inicia sesion
Route::get('user/password', 'UserController@password');
Route::post('user/updatepassword', 'UserController@updatePassword');

 //HistoriaClinica 
    Route::get('historiac', 'HistoriaClinicaController@index')->name('historiac.index')
        ->middleware('can:historiac.index');

    Route::get('historiasc/{create}','HistoriaClinicaController@create')->name('historiac.create')->middleware('can:historiac.create');
    Route::post('historiasc/store', 'HistoriaClinicaController@store')->name('historiac.store')->middleware('can:historiac.create');

    
        //Rutas para cambiar la contraseña del usuario que inicia sesion
  Route::get('user/password', 'UserController@password');
Route::post('user/updatepassword', 'UserController@updatePassword');


    Route::put('historiasc/{historiac}', 'HistoriaClinicaController@update')->name('historiac.update')
        ->middleware('can:historiac.edit');

    Route::get('historiascl/{historiac}', 'HistoriaClinicaController@show')->name('historiacl.show')
        ->middleware('can:historiacl.show');

    Route::delete('historiasc/{historiac}', 'HistoriaClinicaController@destroy')->name('historiac.destroy')
        ->middleware('can:historiac.destroy');

    Route::get('historiasc/{historiac}/edit', 'HistoriaController@edit')->name('historiac.edit')
        ->middleware('can:historiac.edit');
});

//Middlewere es un archivo intermedio entre el usuario y el sistema(para verificar permisos)
