<!DOCTYPE html>
<html>
<head>
	<title>Actualizar Profesional</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="{{ asset('js/Validaciones/RegistrarU.js') }}" defer></script>


</head>
<body>
	<form> 

		<h1 class="text-center">Actualizar Profesional</h1>

		<div class="container-fluid">
				
				<div class="row  mx-auto">
					<div class="col-xs-6 ">
						<label for="exampleFormControlInput1" class="form-label">Numero de Identificación*</label>			
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Primer Nombre*</label>			
					</div>
				</div>
				<div class="row  mx-auto">
					<div class="col-xs-6">

						<input class="form-control" type="text" id="identificacion" name="identificación" value="{{$users->Cedula}}">
					</div>
					<div class=" col-xs-6">
						<input class="form-control" type="text" id="nombre" name="Nombre1" value="{{$users->Nombre1}}">
					</div>	
				</div>
				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Segundo Nombre</label>			
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Primer Apellido*</label>			
					</div>
					<div class=" col-xs-6">
						<input  class="form-control" type="text" id="nombre2" name="Nombre2" value="{{$users->Nombre2}}">
					</div>
					<div class="col-xs-6">
						<input  class="form-control" type="text" id="apellido" name="Apellido1"value="{{$users->Apellido1}}">
					</div>
				</div>

				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Segundo Apellido</label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Correo Electronico*</label>
					</div>
					<div class="col-xs-6">
						<input class="form-control" type="text" id="apellido2" name="Apellido2" value="{{$users->Apellido2}}">
					</div>
					<div class="col-xs-6">
						<input  class="form-control"type="email" id="correo" name="Correo" value="{{$users->email}}">
					</div>
				</div>


			<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Telefono </label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Celular</label>
					</div>
					<div class="col-xs-6">
						<input class="form-control" type="text" id="telefono" name="telefono" value="{{$users->Telefono}}">
					</div>
					<div class="col-xs-6">
						<input class="form-control" type="text" id="celular" name="celular" value="{{$users->Celular}}">
					</div>
				</div>

				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Direccion </label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Tarjeta Profesional</label>
					</div>					
					<div class="col-xs-6">
						<input class="form-control" type="text" id="direccion" name="direccion" value="{{$users->Direccion}}">
					</div>
					<div class="col-xs-6">
						<input class="form-control" type="text" id="Tarjetap" name="Tarjetap" value="{{$users->Tarjeta_Profesional}}">
					</div>
				</div>
<div class="form-group d-flex flex-row justify-content-center alig-items-center">
    <button class="btn btn-success btn-lg" type="submit" id="btn-guardar">Actualizar</button>
				</div>
			</div>

		</form>

		
		
	</body>
	</html>