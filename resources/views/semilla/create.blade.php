@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row center">
			<div class="col s12">
				<h5 class="deep-orange-text">¿Nuevas semillas? Acá puedes agregarlas</h5>
			</div>
		</div>
		<form action="">
			<div class="row">
				<div class="input-field col s12 center">
		            <i class="material-icons prefix">invert_colors</i>
		            <input id="icon_prefix" type="text" class="validate"/>
		            <label for="icon_prefix">Nombre</label>
		        </div>
			</div>
			<div class="row center">
	            <div class="col s12">
	                <button class="btn deep-orange">Agregar</button>
	            </div>
	        </div>
		</form>
	</div>
@stop