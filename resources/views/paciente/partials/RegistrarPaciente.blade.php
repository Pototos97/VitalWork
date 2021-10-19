<!DOCTYPE html>
<html>
<head>
	<title>Registrar Paciente</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{!! asset('css/ejemplo1.css') !!}">
   <script src="{{ asset('js/Validaciones/RegistrarP.js') }}"></script>

  			<script src="{{URL::asset('js/Ciudades/ciuayudante.js')}}"defer></script>

</head>
<body>
	<form> 

		<h1 class="text-center">Registro Paciente</h1>

		<div class="container-fluid">
				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Numero de Identificación*</label>			
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Primer Nombre*</label>			
					</div>
				</div>
				<div class="row  mx-auto">
					<div class="col-xs-6">
						<input type="text" id="identificacion" name="identificacion" class="form-control">
					</div>
					<div class=" col-xs-6">
						<input type="text" id="nombre" name="Nombre1" class="form-control">
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
						<input type="text" id="nombre2" name="Nombre2" class="form-control">
					</div>
					<div class="col-xs-6">
						<input type="text" id="apellido" name="Apellido1" class="form-control">
					</div>
				</div>

				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Segundo Apellido</label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Fecha nacimiento</label>
					</div>
					<div class="col-xs-6">
						<input type="text" id="apellido2" name="Apellido2" class="form-control">
					</div>
					<div class="col-xs-6">
           <input type="date" id="fechaNacimiento"min="1920-01-01" name="fechaNacimiento" class="form-control">
                     </div>
				</div>


			<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Escolaridad </label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Ocupacion</label>
					</div>
					<div class="col-xs-6">
 <select  id="escolaridad" name="escolaridad" class="form-control">
           <option value="">Seleccione: </option>
           <option value="Educacion basica">Educación Bàsica</option>
           <option value="Educacion Media">Educaciòn Media</option>
           <option value="Educacion Superior">Educación Superior</option>
    </select>			
          		</div>
					<div class="col-xs-6">
						<input type="text" id="ocupacion" name="ocupacion" class="form-control">
					</div>
				</div>

				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Pension </label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Entidad</label>
					</div>
					<div class="col-xs-6">
<select  id="pension" name="pension" class="form-control">
              <option value="">Seleccione:</option>
              <option value="si">Si</option>
              <option value="no">No</option>
 </select>					
</div>
					<div class="col-xs-6">
						<input type="text" id="entidad" name="entidad" class="form-control">
					</div>
				</div>


<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Genero</label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Estado civil</label>
					</div>
					<div class="col-xs-6">
                                        <select  id="genero" name="genero" class="form-control">
                                        	<option value="">--Seleccione un genero--</option>
                                            <option value="Femenino">Femenino</option>
                                            <option value="Masculino">Masculino</option>
                                        </select>
					</div>

					<div class="col-xs-6">
				<select  id="estadoCivil" name="estadoCivil" class="form-control">
                                            <option value="">Seleccione:</option>
                                            <option value="Soltero">Soltero</option>
                                            <option value="Unión libre">Unión libre</option>
                                            <option value="Casado">Casado</option>
                                            <option value="Divorciado">Divorciado</option>
                                            <option value="Viudo">Viudo</option>
                                        </select>					
                                      </div>
				</div>



				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Telefono</label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label"> Estatura</label>
					</div>	
					<div class="col-xs-6">
						<input type="text"  id="telefono" name="telefono" class="form-control">
					</div>
					<div class="col-xs-6">
						<input type="text" id="estatura" name="estatura" class="form-control">Cm
					</div>
				</div>


				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Peso</label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label"> Departamento</label>
					</div>	
					<div class="col-xs-6">
						<input type="text"  id="peso" name="peso" class="form-control">
					</div>
					<div class="col-xs-6">
            {!! Form::select('departamento',$departamento,null,['id'=>'departamento','placeholder'=>'Seleccione un departamento','class'=>'form-control']) !!}					
               </div>
				</div>

				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Ciudad</label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label"> Grupo sanguíneo</label>
					</div>	
					<div class="col-xs-6">
 							<select  id="ciudad" name="ciudad" class="form-control">
 									<option value="" disabled="true" selected="true">-Seleccione su ciudad-</option>

                                        </select>			
                       </div>
					<div class="col-xs-6">
 					<select id="rh" name="rh" class="form-control">
                                            <option value="">Seleccione Rh:</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>

                                        </select>				
                             </div>
				</div>


<div class="form-group d-flex flex-row justify-content-center alig-items-center">
					    <button class="btn btn-success btn-lg" type="submit" id="btn-guardar">Guardar</button>

					<span class="help-block" id="error"></span>
				</div>
		</div>
</div>
		</form>
		
	</body>
	
	</html>