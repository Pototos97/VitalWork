@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{!! asset('css/Tablas1.css') !!}">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

@if(auth()->user()->hasRole('Profesional') or auth()->user()->hasRole('Admin'))
                
    
                <div class="panel-body">
                    <table  id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Identificacion</th>
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Fecha de Nacimiento</th>

                                <th>Evolucion</th>
                                 <th></th>

                                 <th></th>
                                  <th></th>

                             </tr>
                        </thead>
                        <tbody>
                            @foreach($paci as $pac)
                            <tr>
                                <td>
                                    {{$pac->PaIdentificacion}}
                                </td>
                                <td>
                                    {{$pac->PaPrimer_Nombre}} {{$pac->PaSegundo_Nombre}}

                                </td>
                                <td>
                                    {{$pac->PaPrimer_Apellido}} {{$pac->PaSegundo_Apellido}}

                                </td>

                                 <td>
                                    {{$pac->PaFecha_Nacimiento}}
                                </td>

                             <td>
                    @can('historias.create')
                    <a class="btn btn-sm btn-primary pull-right" href="{{route('evolu.create',$pac->Id_Paciente)}}">
                        Crear Evolucion paciente
                    </a>
                    @endcan
                             </td>
                         
                                <td width="10px">
                                    @can('paciente.show')
                                    <a class="btn btn-sm btn-default" href="{{ route('evolusi.show', $pac->Id_Paciente)}}">
                                        ver
                                    </a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('paciente.edit')
                                    <a class="btn btn-sm btn-default" href="{{ route('evolu.edit', $pac->Id_Paciente) }}">
                                        editar
                                    </a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('paciente.destroy')

                                    {!! Form::open(['route' => ['evolu.destroy', $pac->Id_Paciente], 
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
           <div class="">
  @if (Session::has('error'))
  <p style="color:#fff; background:black; font-size:18px; text-align:center;" >{{Session::get('error')}}</p>
  @endif
</div>

<div class="">
  @if (Session::has('info'))
  <p style="color:#fff; background:black; font-size:18px; text-align:center;" >{{Session::get('info')}}</p>
  @endif
</div>
    </div>
</div>
@endsection
