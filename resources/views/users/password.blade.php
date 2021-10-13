@extends('layouts.app')
@section('content')

<link rel="stylesheet" href="{!! asset('css/contraseña.css') !!}">

<h1>Cambiar Contraseña</h1>
@if (Session::has('message'))
<div class="text-danger  ">

   {{Session::get('message')}}

   @endif
   <hr />
   <form method="post" action="{{url('user/updatepassword')}}">
       {{csrf_field()}}
       <div class="form-group ">
          <label for="mypassword">Introducir la Actual Contraseña:</label>
          <input type="password" name="mypassword" class="form-control">
          <div class="text-danger">{{$errors->first('mypassword')}}</div>
      </div>
      <div class="form-group">
          <label for="password">Introducir Nueva Contraseña:</label>
          <input type="password" name="password" class="form-control">
          <div class="text-danger">{{$errors->first('password')}}</div>
      </div>
      <div class="form-group">
          <label for="mypassword">Confirmar Contraseña:</label>
          <input type="password" name="password_confirmation" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Cambiar Contraseña</button>
  </div>
</form>

@stop
