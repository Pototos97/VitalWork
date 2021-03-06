@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{!! asset('css/Tablas1.css') !!}">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                    <div class="panel-heading">
                    
                    @can('user.create')
                    <a class="btn btn-sm btn-primary pull-right" href="{{route('user.create')}}">
                        Crear Profesional
                    </a>
                    @endcan
                </div>
@if(auth()->user()->hasRole('Admin'))
                <div class="panel-body">
                    <table  id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                               
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
                                    Especialidad
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
                                 <td>
                                    {{$user->usu['Nombre_Especialidad']}}
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
