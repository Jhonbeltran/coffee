@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="deep-orange-text">Edición de registro de actividades</h5>
			</div>
			<div class="col s12 l6">
				<a href="/actividad/" class="waves-effect waves-light btn btn-flat left btn-large right">Semillas almacenadas</a>
			</div>
		</div>

		{!!Form::model($actividad,['route'=>['actividad.update', $actividad->id], 'method'=>'PUT'])!!}
			@include('actividad.forms.act')
			<div class="row center">
	            <div class="col s6">
	                {!!Form::submit('Actualizar', ['class'=>'btn deep-orange '])!!}
	            </div>
	        
		{!!Form::close()!!}
		
	    {!!Form::open(['route'=>['actividad.destroy', $actividad->id], 'method'=>'DELETE'])!!}
			
	            <div class="col s6">
	                {!!Form::submit('Eliminar', ['class'=>'btn brown darken-4'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop