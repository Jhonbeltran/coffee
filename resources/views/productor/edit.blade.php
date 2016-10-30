@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="row"></div>
				<h5 class="logo">Edición de registro de semillas</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/productor" class="waves-effect waves-red btn-flat right">Registro de Productores</a>
			</div>
		</div>

		{!!Form::model($productor,['route'=>['productor.update', $productor->id], 'method'=>'PUT'])!!}
			@include('productor.forms.pro')
			<div class="row center">
	            <div class="col s6">
	                {!!Form::submit('Actualizar', ['class'=>'btn grisback'])!!}
	            </div>
	        
		{!!Form::close()!!}
		
	    {!!Form::open(['route'=>['productor.destroy', $productor->id], 'method'=>'DELETE'])!!}
			
	            <div class="col s6">
	                {!!Form::submit('Eliminar', ['class'=>'btn brown darken-4'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop