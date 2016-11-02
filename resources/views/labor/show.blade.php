@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Labor Agregada');
	</script>	
@endif
@if($message == 'edit')
	<script>
		alert('Labor Editada');
	</script>	
@endif
@if($message == 'delete')
	<script>
		alert('La Labor ha sido eliminada');
	</script>	
@endif

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel nav grisback">Registro de Labores</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>Id</th>
			<th>Productor</th>
		</thead>
		@foreach($results as $result)
		<tbody>
			<td>{{$result->productor_id}}</td>
			<td>{{$result->nombre}}</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop