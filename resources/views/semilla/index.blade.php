@extends('layouts.principal')
<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Semilla agregada correctamente');
	</script>	
@endif
@if($message == 'store')
	<script>
		alert('Semilla actualizada');
	</script>	
@endif
@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel deep-orange lighten-2">Las semillas en nuestra base de datos</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>id</th>
			<th>Nombre</th>
			<th>Operacion</th>
		</thead>
		@foreach($semillas as $semilla)
		<tbody>
			<td>{{$semilla->id}}</td>
			<td>{{$semilla->nombre}}</td>
			<td>
				{!!link_to_route('semilla.edit', $title = 'Editar', $parameters = $semilla->id, $attributes = ['class'=>'btn btn-flat waves-effect waves-red'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop