@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row center">
			<div class="col s12">
				<h5 class="deep-orange-text">Agrega un nuevo usuario</h5>
			</div>
		</div>
		<form action="">
			<div class="row">
				<div class="input-field col s12 l6">
		            <i class="material-icons prefix">account_circle</i>
		            <input id="icon_prefix" type="text" class="validate"/>
		            <label for="icon_prefix">Nombre</label>
		        </div>
		        <div class="input-field col s12 l6">
	                <i class="material-icons prefix">language</i>
	                <input id="icon_prefix" type="text" class="validate"/>
	                <label for="icon_prefix">Correo electrónico</label>
	            </div>
			</div>
			<div class="row">
				<div class="input-field col s12 l6">
	                <i class="material-icons prefix">lock_outline</i>
	                <input id="icon_prefix" type="password" class="validate"/>
	                <label for="icon_prefix">Escoge una Contraseña</label>
	            </div>
	            <div class="input-field col s12 l6">
	                <i class="material-icons prefix">lock_outline</i>
	                <input id="icon_prefix" type="password" class="validate"/>
	                <label for="icon_prefix">Repite la contraseña</label>
	            </div>
			</div>
			<div class="row center">
	            <div class="col s12">
	                <button class="btn deep-orange">Registrar</button>
	            </div>
	        </div>
		</form>
	</div>
@stop