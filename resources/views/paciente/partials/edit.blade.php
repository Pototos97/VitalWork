@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading bg-white">
                    Actualizar Paciente
     <a class="center"href="{{ route('paciente.index') }}" class="btn btn-default pull-right">Regresar

			</a>
                </div>

                <div class="panel-body">
		{!! Form::model($paciente, ['route' => ['paciente.update', $paciente->Id_Paciente], 'method' => 'PUT']) !!}

                   @include('paciente.partials.ActualizarPaciente')

                   {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
