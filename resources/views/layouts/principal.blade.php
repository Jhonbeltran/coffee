<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee Land</title>
    <!-- Compiled and minified CSS -->
     {!! MaterializeCSS::include_full() !!}
    
    <!--Import Google Icon Font-->
    {!!Html::style('http://fonts.googleapis.com/icon?family=Material+Icons')!!}
    {!!Html::style('https://fonts.googleapis.com/css?family=Sansita+One')!!}
    
    
    

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
</head>
<body>
    <style type="text/css">
      .brand-logo{font-family: 'Sansita One', cursive;};
    </style>
    <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper z-depth-0 brown lighten-5">
            <a href="{!!URL::to('/inicio')!!}" class="brand-logo brown-text text-darken-2 hide-on-med-and-down">&nbsp;&nbsp;Registro Coffe Land</a>
            <a href="{!!URL::to('/')!!}" class="brand-logo  brown-text text-darken-2 hide-on-large-only">Coffe Land</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons brown-text text-darken-2">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="/usuario/create" class="brown-text text-darken-2"><i class="material-icons grey-text left">supervisor_account</i>Nuevo</a></li>
              <li><a href="/" class="brown-text text-darken-2"><i class="material-icons grey-text left">person_pin</i>Ingresar</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="/">Ingresar</a>
              </li>
              <li>
                <a href="/usuario/create">Nuevo</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>

    @yield('content')
    
    <footer class="page-footer  brown lighten-5">
        <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="brown-text text-darken-2 brand-logo">Coffee Land</h5>
                <p class="brown-text text-darken-2">Aplicación para registro de certificación.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="brown-text text-darken-2">Enlaces</h5>
                <ul>
                  <li><a class="brown-text text-darken-2" href="#!">Contactanos</a></li>
                </ul>
              </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container brown-text text-darken-3">
            © 2016
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
            </div>
        </div>
    </footer>


    <!--Import jQuery before materialize.js-->
    {!!Html::script('https://code.jquery.com/jquery-2.1.1.min.js')!!}
    <!-- Compiled and minified JavaScript -->
    {!! MaterializeCSS::include_js() !!}
    <script>
      $( document ).ready(
        function(){$(".button-collapse").sideNav()})
    </script>
</body>
</html>