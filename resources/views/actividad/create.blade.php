@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="deep-orange-text">Agrega una nueva actividad</h5>
			</div>
			<div class="col s12 l6">
				<a href="/actividad/" class="waves-effect waves-light btn btn-flat left btn-large right">Actividades</a>
			</div>
		</div>

		{!!Form::open(['route'=>'actividad.store', 'method'=>'POST'])!!}
			@include('actividad.forms.act')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn deep-orange'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop