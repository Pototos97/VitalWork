@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{!! asset('css/Tablas1.css') !!}">

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

@if(auth()->user()->hasRole('Profesional') or auth()->user()->hasRole('Admin'))
                
                <h2>Evolucion</h2>
                  <h2>Paciente {{$paciente->paci->PaPrimer_Nombre}} {{$paciente->paci->PaPrimer_Apellido}}</h2>
      <div class="panel-body">
                    <table  id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Fecha de Seguimiento</th>
                                <th>Observaciones</th>
                             </tr>
                        </thead>
                        <tbody>
                            @foreach($paciente->evol as $pacie)
                            <tr>
                                <td>
                                    {{$pacie->Fecha_Seguimiento}}
                                </td>
                                 <td width="10px">
                                    @can('evoluc.mevol')
                                    <a class="btn btn-sm btn-default" href="{{ route('evoluc.mevol', $pacie->Id_Evolucion)}}">
                                        ver
                                    </a>
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
