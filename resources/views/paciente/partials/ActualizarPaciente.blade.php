<!DOCTYPE html>
<html>
<head>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{!! asset('css/ejemplo1.css') !!}">
   <!-- <script src="{{ asset('js/Validaciones/RegistrarU.js') }}" defer></script>-->

  			<script src="{{URL::asset('js/Ciudades/ciuayudante.js')}}"defer></script>

</head>
<body>
	<form> 

		<h1 class="text-center">Actualizar Paciente</h1>

		<div class="container-fluid">
				<div class="row  mx-auto">
					
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Primer Nombre*</label>			
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Segundo Nombre</label>			
					</div>			
						</div>
				<div class="row  mx-auto">	
					<div class=" col-xs-6">
						<input class="form-control" type="text" id="nombre" name="Nombre1" value="{{$paciente->PaPrimer_Nombre}}">
					</div>	
					<div class=" col-xs-6">
						<input class="form-control" type="text" id="nombre2" name="Nombre2" value="{{$paciente->PaSegundo_Nombre}}">
					</div>
				</div>

				<div class="row  mx-auto">
					
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Primer Apellido*</label>			
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Segundo Apellido</label>
					</div>
					
					
					<div class="col-xs-6">
						<input class="form-control" type="text" id="apellido" name="Apellido1" value="{{$paciente->PaPrimer_Apellido}}">
					</div>
						<div class="col-xs-6">
						<input class="form-control" type="text" id="apellido2" name="Apellido2" value="{{$paciente->PaSegundo_Apellido}}">
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
					<div class="col-xs-6" class="form-control">
						<input class="form-control" type="text" id="ocupacion" name="ocupacion" value="{{$paciente->PaOcupacion}}">
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
			 @if($paciente->PaPension == 'si')
          <option value="si" selected="select">Si</option>
          <option value="no">No</option>
          @elseif($paciente->PaPension == 'no')
          <option value="si">Si</option>
          <option value="no" selected="selcet">No</option>
          @elseif($paciente->PaPension == "")
          <option value="si">Si</option>
          <option value="no">No</option>
          @endif
 </select>					
</div>
					<div class="col-xs-6">
						<input class="form-control" type="text" id="entidad" name="entidad"  value="{{$paciente->PaEntidad}}" >
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
                                            @if($paciente->PaGenero == 'femenino')
                                            <option value="femenino" selected="select" >femenino</option>
                                            <option value="masculino">masculino</option>
                                            @elseif($paciente->PaGenero =='masculino')
                                            <option value="femenino" >femenino</option>
                                            <option value="masculino" selected="select" >masculino</option>
                                            @elseif($paciente->PaGenero == "")
                                            <option value="femenino">femenino</option>
                                            <option value="masculino">masculino</option>
                                            @endif
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
						<input class="form-control" type="text"  id="telefono" name="telefono" value="{{$paciente->PaTelefono}}">
					</div>
					<div class="col-xs-6">
						<input class="form-control" type="text" id="estatura" name="estatura" value="{{$paciente->PaEstatura}}">Cm
					</div>
				</div>


				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Peso</label>
					</div>
				<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label"> Grupo sanguíneo</label>
					</div>					
					<div class="col-xs-6">
						<input class="form-control" type="text"  id="peso" name="peso" value="{{$paciente->PaPeso}}">
					</div>

					<div class="col-xs-6">
						
 				<select  id="rh" name="rh" class="form-control">
                                            @if($paciente->PaRh == "O+")
                                            <option value="O+" selected="select">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            @elseif($paciente->Rh == "O-")
                                            <option value="O+">O+</option>
                                            <option value="O-" selected="select">O-</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            @elseif($paciente->Rh == "A+")
                                            <option value="O+">O+</option>
                                            <option value="O-" >O-</option>
                                            <option value="A+" selected="select">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            @elseif($paciente->Rh == "A-")
                                            <option value="O+">O+</option>
                                            <option value="O-" >O-</option>
                                            <option value="A+" selected="select">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            @elseif($paciente->Rh == "B+")
                                            <option value="O+">O+</option>
                                            <option value="O-" >O-</option>
                                            <option value="A+" selected="select">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            @elseif($paciente->Rh == "B-")
                                            <option value="O+">O+</option>
                                            <option value="O-" >O-</option>
                                            <option value="A+" selected="select">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            @elseif($paciente->Rh == "AB")
                                            <option value="O+">O+</option>
                                            <option value="O-" >O-</option>
                                            <option value="A+" selected="select">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            @elseif($paciente->Rh == "AB+")
                                            <option value="O+">O+</option>
                                            <option value="O-" >O-</option>
                                            <option value="A+" selected="select">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            @elseif($paciente->Rh == "AB-")
                                            <option value="O+">O+</option>
                                            <option value="O-" >O-</option>
                                            <option value="A+" selected="select">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            @else
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            @endif
                                        </select>			
                             </div>
				</div>
					

					
						
				
					


<div class="form-group d-flex flex-row justify-content-center alig-items-center">
    <button class="btn btn-success btn-lg" type="submit" id="btn-guardar">Guardar</button>

				</div>
</div>
		</form>
		
	</body>
	
	</html>