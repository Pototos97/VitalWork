@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h1>  Historia Clinica </h1>
                  <h2>Paciente {{$paciente->paciente->PaPrimer_Nombre}} {{$paciente->paciente->PaPrimer_Apellido}}</h2>
                   <h2>Profesional {{$paciente->usuari->Nombre1}} {{$paciente->usuari->Apellido1}}</h2>

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
                   
                        <p>
                        <strong>
                        Paraclinicos
                        </strong>
                        {{$paciente->Paraclinicos}}
                    </p>
                   
                        <p>
                        <strong>
                        Discapacidad
                        </strong>
                        {{$paciente->Discapacidad}}
                    </p>
                   
                    <p>
                        <strong>
                        Aspecto general
                        </strong>
                        {{$paciente->Aspecto_General}}
                    </p>
                   
                    <p>
                        <strong>
                        Tension arterial
                        </strong>
                        {{$paciente->T_A}}
                    </p>
                   
                    <p>
                        <strong>
                        Frecuencia cardiaca
                        </strong>
                        {{$paciente->Fre_Cardiaca}}
                    </p>
                   
                     <p>
                        <strong>
                        Pulso 
                        </strong>
                        {{$paciente->Pulso}}
                    </p>


                    <p>
                        <strong>
                        Frecuencia Respiratoria 
                        </strong>
                        {{$paciente->Fre_Respira}}
                    </p>
                   
                     <p>
                        <strong>
                        Peso  
                        </strong>
                        {{$paciente->Peso}}
                    </p>
                     <p>
                        <strong>
                        Talla  
                        </strong>
                        {{$paciente->Talla}}
                    </p>
                     <p>
                        <strong>
                        Factor de riesgo 
                        </strong>
                        {{$paciente->Factor_Riesgo}}
                    </p>
                     <p>
                        <strong>
                        Impresion diagnostica 
                        </strong>
                        {{$paciente->Impresion_Diagnostica}}
                    </p>
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
