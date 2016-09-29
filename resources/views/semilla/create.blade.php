@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="deep-orange-text">¿Nuevas semillas?</h5>
			</div>
			<div class="col s12 l6">
 				<a href="/semilla/" class="waves-effect waves-light btn btn-flat left btn-large right">Semillas almacenadas</a>
 			</div>
		</div>
		<div class="row"></div>
		{!!Form::open(['route'=>'semilla.store', 'method'=>'POST'])!!}
			<div class="row">
				<div class="input-field col s12">
		            <i class="material-icons prefix">invert_colors</i>
		            {!!Form::text('name', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		            <label for="icon_prefix">Nombre</label>
		        </div>
			</div>
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn deep-orange'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop