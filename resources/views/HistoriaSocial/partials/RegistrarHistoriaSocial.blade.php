<!DOCTYPE html>
<html>
<head>
	<title>Registrar Paciente</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" href="{!! asset('css/ejemplo1.css') !!}">
   <script src="{{ asset('js/Validaciones/RegistrarHS.js') }}" defer></script>

  			<script src="{{URL::asset('js/Ciudades/ciuayudante.js')}}"defer></script>

</head>
<body>
	<form> 

		<h1 class="text-center">Historia Social</h1>

		<div class="container-fluid">

				<div class=" row  mx-auto">
					<div class="col-xs-6 ">
						<label for="exampleFormControlInput1" class="form-label">Tarifa</label>			
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Motivo Ingreso</label>			
					</div>
				</div>
				<div class="row  mx-auto">
					<div class="col-xs-6">
						<input type="number" id="tarifa" name="tarifa" class="form-control">
					</div>
					<div class=" col-xs-6">
<textarea class="form-control" name="motivoIngreso" rows="5" id="motivoIngreso" maxlength="100" placeholder="Registre el motivo de ingreso de la persona mayor que se encuentra en la ficha de ingreso (máximo 100 caracteres). "/></textarea>					</div>	
				</div>

				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Modalidad Ingreso</label>			
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Antecedentes</label>			
					</div>
					<div class=" col-xs-6">
  <textarea class="form-control" name="modalidadIngreso" maxlength="80"  rows="5" id="modalidadIngreso" placeholder="Registra si el ingreso es por: convenio interadministrativo con Municipio, corresponsabilidad familiar, ingreso de emergencia, de acuerdo con la ficha de ingreso de la Beneficencia de Cundinamarca (máximo 80 caracteres) "/></textarea>					</div>
					<div class="col-xs-6">
<textarea class="form-control" name="antecedentes" rows="5" maxlength="300" id="antecedentes" placeholder="se registra si la persona mayor ya había estado institucionalizado y la institución respectiva.(máximo 300 caracteres)"/></textarea>					</div>
				</div>

				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Dinamica familiar</label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Factores protectores</label>
					</div>
					<div class="col-xs-6">
 <textarea  class="form-control" name="dinamicaFamiliar" rows="5" maxlength="200"  id="dinamicaFamiliar" placeholder="Registre la dinamica familiar del adulto mayo (máximo 200 caracteres)"/></textarea>					</div>
					<div class="col-xs-6">
  <textarea class="form-control" name="factoresProtectores" rows="5" maxlength="200"  id="factoresProtectores" placeholder="Se describen todas aquellas características personales, familiares, tipo de relaciones y condiciones de vida o elementos del ambiente,  con los que cuenta la persona mayor (máximo 200 caracteres) "/></textarea>                     </div>
				</div>


			<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Factores de riesgo </label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Redes sociales</label>
					</div>
					<div class="col-xs-6">
 <textarea  class="form-control" name="factoresRiesgo" rows="5" maxlength="200"  id="factoresRiesgo" placeholder="se describen todosl los problemas económicos,culturales, de desestructuración familiar, conductas anómalas y otras circunstancias personales, familiares o del entorno que afectan al adulto mayor (máximo 200 caracteres)"/></textarea>
          		</div>
					<div class="col-xs-6">
 <textarea class="form-control" name="redesSociales" rows="5" maxlength="200" id="redesSociales" placeholder="Se registra todas aquella estructuras sociales grupos de personas, relaciones de amistad, parentesco, intereses constituyen un factor protector para el adulto mayor (máximo 200 caracteres)."/></textarea>
                                </div>					
				</div>

				<div class="row  mx-auto">
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Tipologia familiar </label>
					</div>
					<div class="col-xs-6">
						<label for="exampleFormControlInput1" class="form-label">Plan de Intervención </label>
					</div>

	
				
		<div class="col-xs-6">
<textarea  class="form-control" name="tipologiaf" rows="5" maxlength="500" id="tipologiaf" placeholder="Registrar todas aquellas acciones tendientes a disminuir los riesgos y garantizar los derechos del adulto mayor durante su etapas ingreso, permanencia y egreso.(máximo 500 caracteres)"/></textarea>
</div>


					<div class="col-xs-6">
<textarea  class="form-control" name="planIntervencion" rows="5" maxlength="500" id="planIntervencion" placeholder="Registrar todas aquellas acciones tendientes a disminuir los riesgos y garantizar los derechos del adulto mayor durante su etapas ingreso, permanencia y egreso.(máximo 500 caracteres)"/></textarea>
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