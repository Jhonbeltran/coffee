@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="logo">Edición de registro de semillas</h5>
			</div>
			<div class="col s12 l6">
				<a href="/semilla/" class="waves-effect waves-red btn-flat btn-large right">Registro de Productores</a>
			</div>
		</div>

		{!!Form::model($productor,['route'=>['productor.update', $productor->id], 'method'=>'PUT'])!!}
			@include('productor.forms.pro')
			<div class="row center">
	            <div class="col s6">
	                {!!Form::submit('Actualizar', ['class'=>'btn deep-orange '])!!}
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