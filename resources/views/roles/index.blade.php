@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{!! asset('css/Tablas1.css') !!}">
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading ">
                     Roles 
                 @can('roles.create')
                    <a class="btn btn-sm btn-primary pull-right" href="{{route('roles.create')}}">
                        Crear
                    </a>
                    @endcan
                </div>
                <div class="panel-body">
                    <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Role
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
                            @foreach($roles as $role)
                            <tr>
                                <td>
                                    {{$role->id}}
                                </td>
                                <td>
                                    {{$role->name}}
                                </td>
                    
                              
                                <td width="10px">
                                    @can('roles.show')
                                    <a class="btn btn-sm btn-default pull-right" href="{{ route('roles.show', $role->id)}}">
                                        ver
                                    </a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('roles.edit')
                                    <a class="btn btn-sm btn-default pull-right" href="{{ route('roles.edit', $role->id) }}">
                                        editar
                                    </a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('roles.destroy')

                                    {!! Form::open(['route' => ['roles.destroy', $role->id], 
                                    'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger pull-right">
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
            </div>
        </div>
    </div>
</div>

@endsection
