<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee Land</title>
    <!-- Compiled and minified CSS -->
     {!! MaterializeCSS::include_full() !!}
    
    <!--Import Google Icon Font-->
    {!!Html::style('https://fonts.googleapis.com/css?family=Sansita+One|Material+Icons|Righteous')!!}
    
    
    

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
</head>
<body>
    <style type="text/css">
      .brand-logo{font-family: 'Sansita One', cursive;}
      .elegant{font-family: 'Righteous', cursive !important;}
      .navigation{background-color: #c7ad88 !important;}
      .logo{color: #935347 !important;}
      .icon{color: #64706c !important; font-size: 3em !important;}
      .icon-index{color: #64706c !important; font-size: 1.5em !important;}
      .borde{border: 1px #64706c solid}
      .sesion{font-family: 'Quattrocento Sans', sans-serif;}
      /* label color */
       .input-field label {
         color: #000;
       }
       /* label focus color */
       .input-field input[type=text]:focus + label {
         color: #935347;
       }
       /* label underline focus color */
       .input-field input[type=text]:focus {
         border-bottom: 1px solid #935347;
         box-shadow: 0 1px 0 0 #000;
       }
       /* valid color */
       .input-field input[type=text].valid {
         border-bottom: 1px solid #000;
         box-shadow: 0 1px 0 0 #000;
       }
       /* invalid color */
       .input-field input[type=text].invalid {
         border-bottom: 1px solid #b71c1c ;
         box-shadow: 0 1px 0 0 #000;
       }
       /* icon prefix focus color */
       .input-field .prefix.active {
         color: #935347;
       }
       /* label focus color */
       .input-field input[type=password]:focus + label {
         color: #935347;
       }
       /* label underline focus color */
       .input-field input[type=password]:focus {
         border-bottom: 1px solid #935347;
         box-shadow: 0 1px 0 0 #000;
       }
       /* valid color */
       .input-field input[type=password].valid {
         border-bottom: 1px solid #000;
         box-shadow: 0 1px 0 0 #000;
       }
       /* invalid color */
       .input-field input[type=password].invalid {
         border-bottom: 1px solid #b71c1c;
         box-shadow: 0 1px 0 0 #000;
       }
    </style>
    <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper z-depth-0 navigation">
            <a href="{!!URL::to('/inicio')!!}" class="brand-logo logo hide-on-med-and-down">&nbsp;&nbsp;Coffe Land</a>
            <a href="{!!URL::to('/inicio')!!}" class="brand-logo  logo hide-on-large-only">Coffe Land</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons icon">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="/usuario/create" class="logo elegant"><i class="material-icons icon left">add_circle</i>Nuevo</a></li>
              <li><a href="/" class="logo elegant"><i class="material-icons icon left">account_circle</i>Ingresar</a></li>
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
    
    <footer class="page-footer  navigation">
        <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="logo brand-logo">Coffee Land</h5>
                <p class="brown-text text-darken-2">Aplicación para registro de certificación.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="brown-text text-darken-2 elegant">Enlaces</h5>
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