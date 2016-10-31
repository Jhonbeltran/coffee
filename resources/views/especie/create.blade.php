@extends('layouts.principal')

@section('content')
<nav>
    <div class="nav-wrapper grisback">
      <div class="col s12">
        <a href="/variedad/create" class="breadcrumb">&nbsp;Agregar Variedad</a>
        <a href="#!" class="breadcrumb">&nbsp;Agregando Especie</a>
      </div>
    </div>
</nav>
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="row"></div>
				<h5 class="logo">Agrega una Especie de Café</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/especie/" class="waves-effect waves-red btn-flat left right">Registro de Especies</a>
			</div>
		</div>

		{!!Form::open(['route'=>'especie.store', 'method'=>'POST'])!!}
			@include('especie.forms.esp')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn blue-grey'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop