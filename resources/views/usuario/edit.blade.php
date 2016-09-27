@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="deep-orange-text">Edición de Usuario</h5>
			</div>
			<div class="col s12 l6">
				<a href="http://localhost:8000/usuario/" class="waves-effect waves-light btn btn-flat left btn-large right">Usuarios Registrados</a>
			</div>
		</div>

		{!!Form::model($user,['route'=>['usuario.update', $user->id], 'method'=>'PUT'])!!}
			<div class="row">
				<div class="input-field col s12 l6">
		            <i class="material-icons prefix">account_circle</i>
		            {!!Form::text('name', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		            <label for="icon_prefix">Nombre</label>
		        </div>
		        <div class="input-field col s12 l6">
	                <i class="material-icons prefix">language</i>
	                {!!Form::text('email', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
	                <label for="icon_prefix">Correo electrónico</label>
	            </div>
			</div>
			<div class="row">
				<div class="input-field col s12 l6">
	                <i class="material-icons prefix">lock_outline</i>
	                {!!Form::password('password', ['class'=>'validate', 'id'=>'icon_prefix'])!!}
	                <label for="icon_prefix">Escoge una Contraseña</label>
	            </div>
	            <div class="input-field col s12 l6">
	                <i class="material-icons prefix">lock_outline</i>
	                {!!Form::password('again', ['class'=>'validate', 'id'=>'icon_prefix'])!!}
	                <label for="icon_prefix">Repite la contraseña</label>
	            </div>
			</div>
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn deep-orange'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop