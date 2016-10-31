@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="row"></div>
				<h5 class="logo">Edición de registro de Variedades</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/variedad" class="waves-effect waves-red btn-flat right">Registro de Variedades</a>
			</div>
		</div>

		{!!Form::model($variedad,['route'=>['variedad.update', $variedad->id], 'method'=>'PUT'])!!}
			@include('variedad.forms.var')
			<div class="row center">
	            <div class="col s6">
	                {!!Form::submit('Actualizar', ['class'=>'btn grisback'])!!}
	            </div>
	        
		{!!Form::close()!!}
		
	    {!!Form::open(['route'=>['variedad.destroy', $variedad->id], 'method'=>'DELETE'])!!}
			
	            <div class="col s6">
	                {!!Form::submit('Eliminar', ['class'=>'btn brown darken-4'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop