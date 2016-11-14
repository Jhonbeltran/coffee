@extends('layouts.principal')

@section('content')
<nav>
    <div class="nav-wrapper grisback">
      <div class="col s12">
        <a href="/operador/create" id="link" class="breadcrumb">&nbsp;Crear Operador</a>
        <a href="#!" class="breadcrumb">&nbsp;Creando Productor</a>
      </div>
    </div>
</nav>
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="row"></div>
				<h5 class="logo">Agrega un nuevo Productor</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/productor/" class="waves-effect waves-red btn-flat left right">Registro de Productores</a>
			</div>
		</div>

		{!!Form::open(['route'=>'productor.store', 'method'=>'POST'])!!}
			@include('productor.forms.pro')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn blue-grey'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop