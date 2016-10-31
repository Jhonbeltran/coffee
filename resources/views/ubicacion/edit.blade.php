@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="row"></div>
				<h5 class="logo">Edición de registro de Ubicaciones</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/ubicacion" class="waves-effect waves-red btn-flat right">Direcciones Almacenadas</a>
			</div>
		</div>

		{!!Form::model($ubicacion,['route'=>['ubicacion.update', $ubicacion->id], 'method'=>'PUT'])!!}
			@include('ubicacion.forms.ubi')
			<div class="row center">
	            <div class="col s6">
	                {!!Form::submit('Actualizar', ['class'=>'btn grisback'])!!}
	            </div>
	        
		{!!Form::close()!!}
		
	    {!!Form::open(['route'=>['ubicacion.destroy', $ubicacion->id], 'method'=>'DELETE'])!!}
			
	            <div class="col s6">
	                {!!Form::submit('Eliminar', ['class'=>'btn brown darken-4'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop