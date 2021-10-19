@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h1>  Historia Social </h1>
                </div>
                <div class="panel-body">
                    <p>
                        <strong>
                            Motivo de ingreso
                        </strong>
                        {{$histo->Motivo_Ingreso}}
                    </p>
                    <p>
                        <strong>
                        Modalidad de ingreso
                        </strong>
                        {{$histo->Modalidad_Ingreso}}
                    </p>
                    <p>
                        <strong>
                        Antecedentes
                        </strong>
                        {{$histo->Antecedentes}}
                    </p>
                   
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
