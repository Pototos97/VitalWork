@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h1 style="text-align: center;">  Evolucion</h1>
            

                </div>
                <div class="panel-body">
                    <p>
                        <strong>
                            Fecha de seguimiento
                        </strong>
                        {{$paciente->Fecha_Seguimiento}}
                    </p>
                    <p>
                        <strong>
                        Observaciones
                        </strong>
                        {{$paciente->Observaciones}}
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
