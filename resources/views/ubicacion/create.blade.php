@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="row"></div>
				<h5 class="logo">Agrega una nueva Ubicacion</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/ubicacion/" class="waves-effect waves-red btn-flat left right">Direcciones Almacenadas</a>
			</div>
		</div>

		{!!Form::open(['route'=>'ubicacion.store', 'method'=>'POST'])!!}
			@include('ubicacion.forms.ubi')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn blue-grey'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop