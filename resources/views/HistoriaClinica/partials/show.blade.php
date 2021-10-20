@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h1>  Historia Clinica </h1>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>
                            Motivo de Consulta
                        </strong>
                        {{$paciente->Motivo_Consulta}}
                    </p>
                    <p>
                        <strong>
                        Enfermedad Actual
                        </strong>
                        {{$paciente->Enfermedad_Actual}}
                    </p>
                    <p>
                        <strong>
                        Medicacion Actual
                        </strong>
                        {{$paciente->Medicacion_Actual}}
                    </p>
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
