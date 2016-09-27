@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Usuario creado correctamente');
	</script>	
@endif

@section('content')
<div class="container">
	<table class="highlight centered">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Oprecion</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td></td>
		</tbody>
		@endforeach
	</table>
</div>
@stop