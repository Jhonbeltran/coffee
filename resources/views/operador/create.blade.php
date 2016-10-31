@extends('layouts.principal')

@section('content')
<nav>
    <div class="nav-wrapper grisback">
      <div class="col s12">
        <a href="/productor/create" class="breadcrumb">&nbsp;Crear Productor</a>
        <a href="#!" class="breadcrumb">&nbsp;Creando Operador</a>
      </div>
    </div>
</nav>
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<div class="row"></div>
				<h5 class="logo">Agrega un nuevo Operador</h5>
			</div>
			<div class="col s12 l6">
				<div class="row"></div>
				<a href="/operador/" class="waves-effect waves-red btn-flat left right">Registro de Operadores</a>
			</div>
		</div>

		{!!Form::open(['route'=>'operador.store', 'method'=>'POST'])!!}
			@include('operador.forms.ope')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn blue-grey'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop