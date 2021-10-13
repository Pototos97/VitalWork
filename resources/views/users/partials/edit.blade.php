@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading bg-white">
                    Actualizar Profesional

     <a class="center" href="{{ route('users.index') }}" class="btn btn-default pull-right">Regresar
			</a>
                </div>

                <div class="panel-body">
		{!! Form::model($users, ['route' => ['users.update', $users->id], 'method' => 'PUT']) !!}

                   @include('users.partials.ActualizarP')

                   {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
