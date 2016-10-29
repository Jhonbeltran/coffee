@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
			<div class="row"></div>
				<h5 class="logo">Agrega un nuevo usuario</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/usuario/" class="waves-effect waves-red btn-flat right">Usuarios Registrados</a>
			</div>
		</div>

		{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
			@include('usuario.forms.usr')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn blue-grey'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop