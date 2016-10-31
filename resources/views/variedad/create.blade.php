@extends('layouts.principal')

@section('content')
<nav>
    <div class="nav-wrapper grisback">
      <div class="col s12">
        <a href="/especie/create" class="breadcrumb">&nbsp;Agregar Especie</a>
        <a href="#!" class="breadcrumb">&nbsp;Agregando Variedad</a>
      </div>
    </div>
</nav>
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="row"></div>
				<h5 class="logo">Agrega una Variedad de Café</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/variedad/" class="waves-effect waves-red btn-flat left right">Registro de Variedades</a>
			</div>
		</div>

		{!!Form::open(['route'=>'variedad.store', 'method'=>'POST'])!!}
			@include('variedad.forms.var')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn blue-grey'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop