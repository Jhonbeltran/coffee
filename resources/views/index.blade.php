@extends('layouts.principal')
<?php $message=Session::get('message')?>

@if($message == 'success')
  <script>
    alert('Ha logeado correctamente');
  </script> 
@endif
@section('content')
  
  <div class="row"></div>
  <div class="row"></div>
  <div class="row">
    <div class="col s12 m6 l4">
      <div class="col">
        <div class="icon-block z-depth-1">
            <div class="row"></div>
            <div class="row"></div>
            <a class="logo center" href="/cultivo/create"><h5 class="center elegant"><i class="material-icons icon-index">mode_edit</i>&nbsp;Ingresar Datos</h5></a>

            <p class="light center">Ingresa los datos de el cultivo, recuerda que estamos buscando la certificación.</p>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
        </div>
      </div>
      <div class="col">
        <div class="icon-block z-depth-1">
            <div class="row"></div>
            <div class="row"></div>
            <a class="logo center" href="/semilla/create"><h5 class="center elegant"><i class="material-icons icon-index">opacity</i>&nbsp;Semillas</h5></a>

            <p class="light center">¿Quieres agregar alguna semilla? ¡Te apuesto a que esta va a ser la mejor semilla!.</p>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
        </div>
      </div>
    </div>
    <div class="col s12 m6 l4 hide-on-med-and-down z-depth-0">
      <img width="100%" height="100%" src="http://mypicpic-drink.ucoz.ru/_ph/4/87146870.jpg" alt="">
    </div>
    <div class="col s12 m6 l4">
      <div class="col">
        <div class="icon-block z-depth-1">
            <div class="row"></div>
            <div class="row"></div>
            <a class="logo center" href="/cultivo/"><h5 class="center elegant"><i class="material-icons icon-index">dns</i>&nbsp;Registro</h5></a>

            <p class="light center">En esta sección puedes revisar todo el registro del cultivo, Mira todo lo que ha sucedido.</p>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
        </div>
      </div>

      <div class="col">
        <div class="icon-block z-depth-1">
            <div class="row"></div>
            <div class="row"></div>
            <a class="logo center" href="/actividad/"><h5 class="center elegant"><i class="material-icons icon-index">face</i>&nbsp;Actividades</h5></a>

            <p class="light center">¿Alguna nueva tarea para hacer en el cultivo? ¡Agrégala ahora!</p>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
        </div>
      </div>
    </div>
  </div>
@stop