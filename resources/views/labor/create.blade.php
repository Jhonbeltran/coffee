@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="row"></div>
				<h5 class="logo">Labores Díarias</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/labores/" class="waves-effect waves-red btn-flat left right">Registro de Labores</a>
			</div>
		</div>

		{!!Form::open(['route'=>'labor.store', 'method'=>'POST'])!!}
			@include('labor.forms.lab')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn blue-grey'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop