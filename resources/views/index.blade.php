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
            <a class="logo center" href="/cultivo/create"><h5 class="center elegant"><i class="material-icons icon-index">contacts</i>&nbsp;Personal</h5></a>

            <p class="light center">Agrega a las personas que conforman el equipo, productores y operadores.</p>
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

            <p class="light center">Actualiza el registro de variedades y especies de las semillas.</p>
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
            <a class="logo center" href="/cultivo/"><h5 class="center elegant"><i class="material-icons icon-index">location_on</i>&nbsp;Ubicación</h5></a>

            <p class="light center">Agrega todas las ubicaciones de los cultivos. Gestiona sus direcciones.</p>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
        </div>
      </div>

      <div class="col">
        <div class="icon-block z-depth-1">
            <div class="row"></div>
            <div class="row"></div>
            <a class="logo center" href="/actividad/"><h5 class="center elegant"><i class="material-icons icon-index">face</i>&nbsp;Blog</h5></a>

            <p class="light center">Administra el Blog, agrega entradas de valor para tus clientes</p>
            <div class="row"></div>
            <div class="row"></div>
            <div class="row"></div>
        </div>
      </div>
    </div>
  </div>
@stop