<!DOCTYPE html>
<html>
<head>
	<title>Registrar Paciente</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{!! asset('css/ejemplo1.css') !!}">
    <script src="{{ asset('js/Validaciones/RegistrarHC.js') }}" defer></script>

</head>
<body>
	<form> 

    <h3>Paciente {{ $paciente->PaPrimer_Nombre }}</h3>

		<div class="container-fluid">

				<div class=" row  mx-auto">
					<div class="col-xs-6 ">
						<label for="exampleFormControlInput1" class="form-label">Motivo de la consulta</label>			
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Enfermedad Actual</label>			
					</div>
				</div>
				<div class="row  mx-auto">
					<div class="col-xs-6">
		<textarea class="form-control" name="motivoConsulta" rows="5" id="motivoConsulta" maxlength="1000" placeholder="Registre el motivo de de la consulta de la persona mayor."/></textarea>					</div>	

			<div class=" col-xs-6">
			<textarea class="form-control" name="enfermedadActual" rows="5" id="enfermedadActual" maxlength="300" placeholder="Enfermedad actual que tenga el paciente. "/></textarea>					
			</div>	
					</div>

				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Medicacion Actual</label>			
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Paraclinicos</label>			
					</div>
					<div class=" col-xs-6">
  <textarea class="form-control" name="medicacionActual" maxlength="300"  rows="5" id="medicacionActual" placeholder="Registra si el paciente tiene medicacion actual(máximo 300 caracteres) "/></textarea>					</div>
					<div class="col-xs-6">
<textarea class="form-control" name="paraclinicos" rows="5" maxlength="200" id="paraclinicos" placeholder="se registra las valoraciones para ayuda diagnóstica y para mayor exactitud.(máximo 200 caracteres)"/></textarea>				
	</div>
				</div>

				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Discapacidad</label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Aspecto General</label>
					</div>
			<div class="col-xs-6">
				<label for="ninguna-0">
				<input type="checkbox" id="ninguna" value="ninguna"  name="Discapacidad[]"><i></i>
					<span>Ninguna</span>
				</label>
				<label for="Cognitiva-0">
				<input type="checkbox" value="Cognitiva" class="causa" name="Discapacidad[]"><i></i>
					<span>Cognitiva</span>
				</label>
				<label for="Física-0">
					<input type="checkbox" value="Física" class="causa" name="Discapacidad[]"><i></i>
					<span>Física</span>
				</label>
				<label for="Sensorial-0">
					<input type="checkbox" value="Sensorial" class="causa" name="Discapacidad[]"><i></i>
					<span>Sensorial</span>
				</label>
				<label for="Mental-0">
					<input type="checkbox" value="Mental" class="causa" name="Discapacidad[]"><i></i>
					<span>Mental</span>
				</label>
 			</div>
					<div class="col-xs-6">
  				<textarea class="form-control" name="aspectoGeneral" rows="5" maxlength="200"  id="aspectoGeneral" placeholder="Aspecto general del paciente (máximo 200 caracteres) "/></textarea>                     
  			</div>
				</div>


			<div class="row  mx-auto">
					<div class="col-xs-4">
						<label for="exampleFormControlInput1" class="form-label">Tension Arterial </label>
					</div>
					<div class="col-xs-4">
						<label for="exampleFormControlInput1" class="form-label">Frecuencia Cardiaca</label>
					</div>
					<div class="col-xs-4">
						<label for="exampleFormControlInput1" class="form-label">Pulso</label>
					</div>
					<div class="col-xs-4">
            <input type="text" class="form-control" id="tensionA" name="tensionA" >
          				</div>
          				<div class="col-xs-4">
            <input type="text" class="form-control" id="frecuenciaC" name="frecuenciaC" >
          				</div>
          				<div class="col-xs-4">
            <input type="text" class="form-control" id="pulso" name="pulso" >
          				</div>

					<div class="col-xs-4">
						<label for="exampleFormControlInput1" class="form-label">Frecuencia Respiratoria</label>
					</div>
					<div class="col-xs-4">
						<label for="exampleFormControlInput1" class="form-label">Peso</label>
					</div>
					<div class="col-xs-4">
						<label for="exampleFormControlInput1" class="form-label">Talla</label>
					</div>
					<div class="col-xs-4">
            <input type="text" class="form-control" id="frecuenciaR" name="frecuenciaR" >
          				</div>
          				<div class="col-xs-4">
            <input type="text" class="form-control" id="peso" name="peso">
          				</div>
          				<div class="col-xs-4">
            <input type="text" class="form-control" id="Talla" name="Talla" >
          				</div>
									
				</div>

				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Factor de Riesgo</label>
					</div>
				<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Impresion diagnostica</label>
					</div>
				
			<div class="col-xs-6">
		<textarea  class="form-control" name="factorR" rows="5" maxlength="200" id="factorR" placeholder="Registrar si el adulto mayor tiene algun factor de riesgo.(máximo 200 caracteres)"/></textarea>
			</div>

			<div class="col-xs-6">
		<textarea  class="form-control" name="impresionD" rows="5" maxlength="400" id="impresionD" placeholder="Registrar el funcionamiento de acuerdo a las pruebas aplicadas del paciente.(máximo 400 caracteres)"/></textarea>
			</div>

			</div>


			<div class="form-group d-flex flex-row justify-content-center alig-items-center">
				<button class="btn btn-success btn-lg" type="submit" id="btn-guardar">Guardar</button>
					<span class="help-block" id="error"></span>
			</div>
</div>


</form>
		
	</body>
	
	</html>