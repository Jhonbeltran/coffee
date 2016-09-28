@extends('layouts.principal')

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel deep-orange lighten-2">Las semillas en nuestra base de datos</h5>
		</div>
	</div>
	<table class="highlight centered responsive-table">
		<thead>
			<th>id</th>
			<th>Nombre</th>
		</thead>
		@foreach($semillas as $semilla)
		<tbody>
			<td>{{$semilla->id}}</td>
			<td>{{$semilla->nombre}}</td>
			<td></td>
		</tbody>
		@endforeach
	</table>
</div>
@stop