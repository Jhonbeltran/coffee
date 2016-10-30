@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="logo">Agrega una nueva semilla</h5>
			</div>
			<div class="col s12 l6">
				<a href="/productor/" class="waves-effect waves-red btn-flat left btn-large right">Registro de Productores</a>
			</div>
		</div>

		{!!Form::open(['route'=>'productor.store', 'method'=>'POST'])!!}
			@include('productor.forms.pro')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn nav'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop