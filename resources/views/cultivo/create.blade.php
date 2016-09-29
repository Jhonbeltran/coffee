@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="deep-orange-text">Agrega un nuevo lote de Cultivo</h5>
			</div>
			<div class="col s12 l6">
				<a href="http://localhost:8000/usuario/" class="waves-effect waves-light btn btn-flat left btn-large right">Cultivos registrados</a>
			</div>
		</div>

		{!!Form::open(['route'=>'cultivo.store', 'method'=>'POST'])!!}
			<div class="row">
				<div class="input-field col s12 l6">
		            <i class="material-icons prefix">account_circle</i>
		            {!!Form::text('responsable', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		            <label for="icon_prefix">Responsable</label>
		        </div>
		        <div class="input-field col s12 l6">
	                <i class="material-icons prefix">invert_colors</i>
	                {!!Form::text('semilla_id', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
	                <label for="icon_prefix">Id Semilla</label>
	            </div>
			</div>
			<div class="row">
	            <div class="input-field col s12">
	                <i class="material-icons prefix">room</i>
	                {!!Form::text('direccion', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
	                <label for="icon_prefix">Dirección</label>
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