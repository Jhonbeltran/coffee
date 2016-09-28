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
				<div class="input-field col s12 center">
		            <i class="material-icons prefix">invert_colors</i>
		            <input id="icon_prefix" type="text" class="validate" name="name" />
		            <label for="icon_prefix">Nombre</label>
		        </div>
			</div>
			<div class="row center">
	            <div class="col s12">
	                <input type="submit" class="btn deep-orange" value="Agregar" />
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop