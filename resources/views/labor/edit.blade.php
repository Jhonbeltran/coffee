@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="row"></div>
				<h5 class="logo">Edición de registro de Labores</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/labor" class="waves-effect waves-red btn-flat right">Edicion de Labores</a>
				<a href="/labor/show" class="waves-effect waves-red btn-flat right">Registro de Labores</a>
			</div>
		</div>

		{!!Form::model($labor,['route'=>['labor.update', $labor->id], 'method'=>'PUT'])!!}
			@include('labor.forms.lab')
			<div class="row center">
	            <div class="col s6">
	                {!!Form::submit('Actualizar', ['class'=>'btn grisback'])!!}
	            </div>
	        
		{!!Form::close()!!}
		
	    {!!Form::open(['route'=>['labor.destroy', $labor->id], 'method'=>'DELETE'])!!}
			
	            <div class="col s6">
	                {!!Form::submit('Eliminar', ['class'=>'btn brown darken-4'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop