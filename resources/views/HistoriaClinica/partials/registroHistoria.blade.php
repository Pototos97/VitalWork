<!DOCTYPE html>
<html>
<head>
	<title>Ingresar Datos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{!! asset('css/registro.css') !!}">
	<link rel="stylesheet" href="{!! asset('css/ejemplo1.css') !!}">

	<script src="{{ asset('js/Validaciones/IngresarDatos.js') }}"></script>
</head>
	<body>
		<form>
			<div class="DatosP">
				
				<h1>Ingreso de datos Paciente</h1><br>		
				<label for="exampleFormControlInput1" class="form-label">Antecedentes*</label>
				<br><br>
				      <!-- Multiple Checkboxes -->
				<label for="ninguna-0">
					<input type="checkbox" id="ninguna"  name="Antecedentes[]" value="ninguna"><i></i>
					<span>Ninguna</span>
				</label>
				<label for="Asma-0">
					<input type="checkbox" value="Asma" class="causa" name="Antecedentes[]"><i></i>
					<span>Asma</span>
				</label>
				<label for="Gota-0">
					<input type="checkbox" value="Gota" class="causa" name="Antecedentes[]"><i></i>
					<span>Gota</span>
				</label>
				<label for="Artitris-0">
					<input type="checkbox" value="Artitris" class="causa" name="Antecedentes[]"><i></i>
					<span>Artitris</span>
				</label>
				<label for="Cáncer-0">
					<input type="checkbox" value="Cáncer" class="causa" name="Antecedentes[]"><i></i>
					<span>Cáncer</span>
				</label>
				<label for="Anemia-0">
					<input type="checkbox" value="Anemia" class="causa" name="Antecedentes[]"><i></i>
					<span>Anemia</span>
				 </label>
				 <label for="Diabetes-0">
					<input type="checkbox" value="Diabetes" class="causa"  name="Antecedentes[]"><i></i>
					<span>Diabetes</span>
				</label>
				<label for="Hemofilia-0">
					<input type="checkbox" value="Hemofilia" class="causa"  name="Antecedentes[]"><i></i>
					<span>Hemofilia</span>
				</label>
				<label for="Dislipemias-0">
					<input type="checkbox" value="Dislipemias" class="causa"  name="Antecedentes[]"><i></i>
					<span>Dislipemias</span>
				</label>
				<label for="Alcoholismo-0">
					<input type="checkbox" value="Alcoholismo" class="causa"  name="Antecedentes[]"><i></i>
					<span>Alcoholismo</span>
				</label>
				<label for="Reumatismo-0">
					<input type="checkbox" value="Reumatismo" class="causa"  name="Antecedentes[]"><i></i>
					<span>Reumatismo</span>
				</label>
				<label for="Cardiopatías-0">
					<input type="checkbox" value="Cardiopatías" class="causa"  name="Antecedentes[]"><i></i>
					<span>Cardiopatías</span>
				</label>
				<label for="Tuberculosis-0">
					<input type="checkbox" value="Tuberculosis" class="causa"  name="Antecedentes[]"><i></i>
					<span>Tuberculosis</span>
				</label> 
				<label for="Arterioesclerosis-0">
					<input type="checkbox"  value="Arterioesclerosis" class="causa"  name="Antecedentes[]"><i></i>
					<span>Arterioesclerosis</span>
				</label>
				<label for="EnfermedadesV-0">
					<input type="checkbox" value="EnfermedadesV" class="causa"  name="Antecedentes[]"><i></i>
					<span>Enfermedades venéreas(Sífilis,SIDA,..)</span>
				</label><br>
			
<!-- Fin checkbox-->



<div class="row">
	<div class="col-xs-6">
		<label for="exampleFormControlInput1" class="form-label">Edad (años)*</label>			
	</div>
	<div class="col-xs-6">
		<label for="exampleFormControlInput1" class="form-label">Peso (kg)*</label>				
	</div>
</div>
<div class="row">
	<div class="col-xs-6">
            <input type="text" class="form-control" id="edad" name="edad" />
     </div>
     <div class="col-xs-6">
            <input type="text" class="form-control" id="peso" name="Peso" /> 
    </div>
</div>
<div class="row">
	<div class="col-xs-6">
		<label for="exampleFormControlInput1" class="form-label">Altura (m)*</label>
	</div>
	<div class="col-xs-6">
		<label for="exampleFormControlInput1" class="form-label">Presión Arterial Actual (mmHg)*</label>
	</div>
	<div class="col-xs-6">
   		<input type="text" class="form-control" id="altura" name="Altura"> 
   	</div>
   	<div class="col-xs-6">
   	  <input type="text" class="form-control" id="presionArterial" name="P_Arterial">
   	</div>
</div>
<div class="row">
	<div class="col-xs-6">
		<label for="exampleFormControlInput1" class="form-label">Seleccione su género<br></label>
	</div>
	<div class="col-xs-6">

		<input  type="radio" name="género" value="Masculino"  checked><label class="form-check-label" for="flexRadioDefault1">Masculino</label>
		<input type="radio" name="género" value="Femenino"><label class="form-check-label" for="flexRadioDefault1">Femenino</label><br><br>
	</div>
</div>
<div class="row">
	<div class="col-xs-6">
		<label for="exampleFormControlInput1" class="form-label">¿Es usted fumador?<br></label>
	</div>
	<div class="col-xs-6">
		<input  type="radio" name="fumador" value="Si" checked><label class="form-check-label" for="flexRadioDefault1">Si</label>
		<input  type="radio" name="fumador" value="No"><label class="form-check-label" for="flexRadioDefault1">No</label><br><br>
	</div>
</div>
<div class="row">
	<div class="col-xs-6">
		<label for="exampleFormControlInput1" class="form-label">¿Consume Alcohol?<br></label>
	</div>
	<div class="col-xs-6">
		<input  type="radio" name="Alcohol" value="Si" checked><label class="form-check-label" for="flexRadioDefault1">Si</label>
		<input  type="radio" name="Alcohol" value="No"><label class="form-check-label" for="flexRadioDefault1">No</label><br><br>
	</div>
</div>
<div class="row">
	<div class="col-xs-6">
		<label for="exampleFormControlInput1" class="form-label">¿Realiza Ejercicio?<br></label>
	</div>
	<div class="col-xs-6">
		<input  type="radio" name="Ejercicio" value="Si" checked><label class="form-check-label" for="flexRadioDefault1">Si</label>
		<input  type="radio" name="Ejercicio" value="No"><label class="form-check-label" for="flexRadioDefault1">No</label><br><br>
	</div>
</div>

	<div class="text-center">
	<input type="Submit" class="btn btn-primary " id="btn-guardar" value="Enviar"><p></p>
	<input type="reset" class="btn btn-danger" value="Borrar"><br><br>

	</div>
	
				
			
			
		</form>	
	</body>
</html>