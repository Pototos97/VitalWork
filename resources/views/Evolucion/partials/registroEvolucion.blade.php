<!DOCTYPE html>
<html>
<head>
	<title>Registrar Evolucion</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{!! asset('css/ejemplo1.css') !!}">

</head>
<body>
	<form> 

    <h3>Paciente {{ $paciente->PaPrimer_Nombre }}</h3>

		<div class="container-fluid">

				<div class=" row  mx-auto">
					<div class="col-xs-6 ">
						<label for="exampleFormControlInput1" class="form-label">Evolucion</label>			
					</div>
					
				</div>
				<div class="row  mx-auto">
			<div class=" col-xs-12">
			<textarea class="form-control" name="evolucion" rows="10" id="evolucion" maxlength="600" placeholder="Evolucion del paciente. "/></textarea>					
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