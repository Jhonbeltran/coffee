@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="row"></div>
				<h5 class="logo">Edición de registro de Operadores</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/operador" class="waves-effect waves-red btn-flat right">Registro de Operadores</a>
			</div>
		</div>

		{!!Form::model($operador,['route'=>['operador.update', $operador->id], 'method'=>'PUT'])!!}
			@include('operador.forms.ope')
			<div class="row center">
	            <div class="col s6">
	                {!!Form::submit('Actualizar', ['class'=>'btn grisback'])!!}
	            </div>
	        
		{!!Form::close()!!}
		
	    {!!Form::open(['route'=>['operador.destroy', $operador->id], 'method'=>'DELETE'])!!}
			
	            <div class="col s6">
	                {!!Form::submit('Eliminar', ['class'=>'btn brown darken-4'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop