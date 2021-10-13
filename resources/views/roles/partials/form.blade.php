<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet"/>

<div class="form-group">
	{{Form::label('name','Nombre')}}
	{{Form::text('name',null,['class'=>'form-control'])}}

</div>

<div class="form-group">
	{{Form::label('slug','URL Amigable')}}
	{{Form::text('slug',null,['class'=>'form-control'])}}

</div>
<div class="form-group">
	{{Form::label('description','Descripcion')}}
	{{Form::textarea('description',null,['class'=>'form-control'])}}
</div>
<h3>Permiso especial</h3>
<div class="form-group">
	<label>{{Form::radio('special','all-access')}}Acceso total</label>
	<label>{{Form::radio('special','no-access')}}Ningun acceso</label>
</div>

<hr>
<h3>Lista de permisos</h3>

<div class="form-group">
	<ul class="list-unstyled">
		@foreach($permissions as $permission)

		<li>
			<label>
				{{Form::checkbox('permissions[]',$permission->id,null)}}
				{{$permission->name}}
				<em>({{$permission->description ?:'N/A'}})</em>
			</label>
		</li>
		@endforeach
	</ul>
	
</div>


<div class="form-group d-flex flex-row justify-content-center alig-items-center">
	{{Form::submit('Guardar',['class'=>'btn btn-sm btn-primary'])}}
</div>