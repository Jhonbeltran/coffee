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
			@include('usuario.forms.usr')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn deep-orange'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop