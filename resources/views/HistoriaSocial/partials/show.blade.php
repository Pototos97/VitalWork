@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h1>  Historia Social </h1>
                  <h2>Paciente {{$paciente->paci->PaPrimer_Nombre}} {{$paciente->paci->PaPrimer_Apellido}}</h2>
                   <h2>Profesional {{$paciente->usuarios->Nombre1}} {{$paciente->usuarios->Apellido1}}</h2>

                </div>
                <div class="panel-body">
                    <p>
                        <strong>
                            Motivo de ingreso
                        </strong>
                        {{$paciente->Motivo_Ingreso}}
                    </p>
                    <p>
                        <strong>
                        Modalidad de ingreso
                        </strong>
                        {{$paciente->Modalidad_Ingreso}}
                    </p>
                    <p>
                        <strong>
                        Tarifa
                        </strong>
                        {{$paciente->Tarifa}}
                    </p>
                    <p>
                        <strong>
                        Antecedentes
                        </strong>
                        {{$paciente->Antecedentes}}
                    </p>
                    <p>
                        <strong>
                        Tipologia familiar
                        </strong>
                        {{$paciente->Tipologia_Familiar}}
                    </p>
                    <p>
                        <strong>
                        Dinamica familiar
                        </strong>
                        {{$paciente->Dinamica_Familiar}}
                    </p>
                      <p>
                        <strong>
                        Factores protectores 
                        </strong>
                        {{$paciente->Factores_Protectores}}
                    </p>
                    <p>
                        <strong>
                        Factores de riesgo 
                        </strong>
                        {{$paciente->Factores_Riesgo}}
                    </p>
                      <p>
                        <strong>
                        Redes sociales 
                        </strong>
                        {{$paciente->Redes_Sociales}}
                    </p>

                      <p>
                        <strong>
                        Plan de intervencion 
                        </strong>
                        {{$paciente->Plan_Intervencion}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
