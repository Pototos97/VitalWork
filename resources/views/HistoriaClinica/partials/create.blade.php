@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading bg-white">
                    Historia Clinica
                </div>
                <div class="panel-body">
                    {!! Form::open(['route'=>'historiac.store'])!!}

                   @include('HistoriaClinica.partials.registroHistoria')

                   {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
