@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{!! asset('css/Tablas1.css') !!}">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <div class="panel-heading">
                    Profesionales
                    @can('user.create')
                    <a class="btn btn-sm btn-primary pull-right" href="{{route('user.create')}}">
                        Crear Profesional
                    </a>
                    @endcan
                </div>
@if(auth()->user()->hasRole('Admin'))
<!-- Search-->

<form class="form-inline ml-3">
    
    <div class="input-group input-group-sm">
        
        <input type="search" name="search" placeholder="Digite la cédula a buscar">
    </div>
    <div class="input-group input-group-sm">
<button class="btn btn-navbar" type="submit">
<i class="fas fa-search">Buscar</i>
</button>
            </div>

</form>



                <div class="panel-body">
                    <table  id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                Nombres
                                </th>
                                <th>
                                  Apellidos
                                </th>
                                 <th>
                                  Cedula
                                </th>
                                    <th>
                                        Email
                                </th>
                                    <th>
                                </th>
                                 <th>
                                </th>
                                 <th>
                                </th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    {{$user->id}}
                                </td>
                                <td>
                                    {{$user->Nombre1}} {{$user->Nombre2}}

                                </td>
                                <td>
                                    {{$user->Apellido1}} {{$user->Apellido2}}

                                </td>

                                 <td>
                                    {{$user->Cedula}}
                                </td>

                                 <td>
                                    {{$user->email}}
                                </td>
                                                          
                                <td width="10px">
                                    @can('users.show')
                                    <a class="btn btn-sm btn-default" href="{{ route('users.show', $user->id)}}">
                                        ver
                                    </a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('users.edit')
                                    <a class="btn btn-sm btn-default" href="{{ route('users.edit', $user->id) }}">
                                        editar
                                    </a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('users.destroy')

                                    {!! Form::open(['route' => ['users.destroy', $user->id], 
                                    'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">
                                        Eliminar
                                    </button>
                                    {!! Form::close() !!}
                                      @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
