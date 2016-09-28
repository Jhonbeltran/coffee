@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="deep-orange-text">Edición de Semillas</h5>
			</div>
			<div class="col s12 l6">
				<a href="/semilla/" class="waves-effect waves-light btn btn-flat left btn-large right">Semillas almacenadas</a>
			</div>
		</div>

		{!!Form::model($semilla,['route'=>['semilla.update', $semilla->id], 'method'=>'PUT'])!!}
			<div class="row">
				<div class="input-field col s12 center">
		            <i class="material-icons prefix">invert_colors</i>
		            {!!Form::text('name', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		            <label for="icon_prefix">Nombre</label>
		        </div>
			</div>
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Actualizar', ['class'=>'btn deep-orange'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop