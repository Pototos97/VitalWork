<!DOCTYPE html>
<html>
<head>
	<title>Registrar Profesional</title>

	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{!! asset('css/ejemplo1.css') !!}">
    <script src="{{ asset('js/Validaciones/RegistrarU.js') }}" defer></script>



</head>
<body>
	<form> 
		<h1 class="text-center">Registro Profesional</h1>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<label for="exampleFormControlInput1" class="form-label">Tipo de Documento</label>	
				</div>
				<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Numero de Identificación*</label>	
					</div>
				<div class="col-md-6">
					<div class="RegistroP">
						<select id="Tipoid" name="docu" class="form-control">
							<option value="">--Haga una elección--</option>
							<option value="CC">Cédula de Ciudadanía</option>
							<option value="NIT">NIT</option>
							<option value="CE">Cédula de Extranjería</option>
						</select>
					</div>
				</div>
						<div class="col-md-6">
						<input type="text" id="identificacion" name="identificación" class="form-control">
					</div>		
			</div>

		


		<div class="row">
				<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Primer Nombre*</label>			
					</div>
						<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Segundo Nombre</label>			
					</div>
					<div class=" col-md-6">
						<input type="text" id="nombre" name="Nombre1" class="form-control">
					</div>

					<div class=" col-md-6">
						<input type="text" id="nombre2" name="Nombre2" class="form-control">
					</div>
		</div>


		
	
				<div class="row">
					<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Primer Apellido*</label>			
					</div>

						<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Segundo Apellido</label>
					</div>
					
					<div class="col-md-6">
						<input type="text" id="apellido" name="Apellido1" class="form-control">
					</div>

						<div class="col-md-6">
						<input type="text" id="apellido2" name="Apellido2" class="form-control">
					</div>
			</div>

<div class="row">
					<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Correo Electronico*</label>
					</div>
					<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Telefono</label>
					</div>
					<div class="col-md-6">
						<input type="email" id="correo" name="Correo" class="form-control">
					</div>

					<div class="col-md-6">
						<input type="text" id="telefono" name="telefono" class="form-control">
					</div>
</div>


<div class="row">
					<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Celular</label>
					</div>
					<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Direccion </label>
					</div>
					<div class="col-md-6">
						<input type="text" id="celular" name="celular" class="form-control">
					</div>
					<div class="col-md-6">
						<input type="text" id="direccion" name="direccion" class="form-control">
					</div>

</div>


			<div class="row ">
					<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Tipo Usuario</label>
					</div>
					<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Especialidad </label>
					</div>
					
					<div class="col-md-6">
						<input type="text" id="tipousu" name="tipousu" class="form-control">
					</div>

					<div class="col-md-6">
  							<select id="especialidad" name="especialidad" class="form-control">
							<option value="">--Seleccione una especialidad--</option>
                                @foreach($complete as $comp)
                                            <option>{{$comp->Nombre_Especialidad}}</option>
                                 @endforeach
                            </select>
				</div>
				</div>


					<div class="row ">
					<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Genero</label>
					</div>
					<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Tarjeta Profesional</label>
					</div>
					<div class="col-md-6">
                           <select id="genero" name="genero" class="form-control">
                                        	<option value="">--Seleccione un genero--</option>
                                            <option value="Femenino">Femenino</option>
                                            <option value="Masculino">Masculino</option>
                            </select>
					</div>
					<div class="col-md-6">
						<input type="text" id="Tarjetap" name="Tarjetap" class="form-control" class="form-control">
					</div>
			</div>


				<div class="row">
					<div class="col-md-6 " >
						<label for="exampleFormControlInput1" class="form-label">Contraseña*</label>
					</div>
					<div class="col-md-6">
						<label for="exampleFormControlInput1" class="form-label">Confirmar Contraseña*</label>
					</div>	
					<div class="col-md-6">
						<input type="password"  id="pass" name="password" class="form-control">
					</div>
						<div class="col-md-6">
						<input type="password" id="pass2" name="Contraseña2" class="form-control">
						</div>
			</div>



<div class="form-group d-flex flex-row justify-content-center alig-items-center">
    <button class="btn btn-success btn-lg" type="submit" id="btn-guardar">Guardar</button>
				<span class="help-block" id="error"></span>
</div>


</div>


		</form>

		<div id="pswd_info">
			<h4>La contraseña debe cumplir los siguientes requerimientos:</h4>
			<ul>
				<li id="capital" class="invalid">Al menos <strong>una letra mayúscula</strong></li>
				<li id="number" class="invalid">Al menos <strong>un numero</strong></li>
				<li id="length" class="invalid">Minimo <strong>8 caracteres</strong></li>
			</ul>
		</div>
		
	</body>
	</html>