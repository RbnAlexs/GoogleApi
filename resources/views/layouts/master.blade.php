<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      Franslux - Intranet
    </title>
    <link rel="shortcut icon" type="images/png" href="/images/favicon.png"/>
    <!--Import Google Icon Font-->
    <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">
    <link rel="stylesheet" href="/css/styles.css">

    <!-- Compiled and minified JavaScript -->
    <script src="/js/materialize.js"></script>
    <script src="/js/pickadate.js/lib/picker.time.js"></script>
    <script src="/js/scripts.js"></script>
    <script>
    jQuery.extend( jQuery.fn.pickadate.defaults, {
    monthsFull: [ 'enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre' ],
    monthsShort: [ 'ene', 'feb', 'mar', 'abr', 'may', 'jun', 'jul', 'ago', 'sep', 'oct', 'nov', 'dic' ],
    weekdaysFull: [ 'domingo', 'lunes', 'martes', 'miércoles', 'jueves', 'viernes', 'sábado' ],
    weekdaysShort: [ 'dom', 'lun', 'mar', 'mié', 'jue', 'vie', 'sáb' ],
    today: 'hoy',
    clear: 'borrar',
    close: 'cerrar',
    format: 'yyyy/mm/dd',
    formatSubmit: 'yyyy/mm/dd'
    });
    </script>
    <style>
    @yield('style')
    </style>
    @yield('script')
  </head>
  <body>
    <header>
    <div>
          <ul id="dropdown1" class="dropdown-content">
            <li @if(app()->request->is('booking')) class='active'@endif><a href="/booking">Reservar sala</a></li>
            <li @if(app()->request->segment(2)=='view-all') class="active"@endif><a href="/booking/view-all/{{date('Y-m-d')}}/confirmed">Todas las reservaciones</a></li>
            <li @if(app()->request->segment(2)=='view-own') class="active"@endif><a href="/booking/view-own/{{date('Y-m-d')}}/confirmed">Tus reservaciones</a></li>
          </ul>      
        <nav class="grey darken-4">
          <a href="/booking"><img src="/images/logo.png" height="60" class="z-depth-2"/></a>
          <div class="nav-wrapper right">          
            <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="hide-on-med-and-down">
              <li class="right">
                <a class="waves-effect waves-light btn red accent-3" href="/logout" onclick="return confirm('Are you sure you want to Sign-out?')">Salir</a>
              </li>
              <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Salas de Juntas<i class="material-icons right">arrow_drop_down</i></a></li>
            </ul>
          </div>
      </nav>

      <ul id="slide-out" class="side-nav">
        <li><a href="/booking">Reservar Sala<i class="material-icons">mode_edit</i></a></li>
        <li><a href="/booking/view-all/{{date('Y-m-d')}}/confirmed">Todas las reservaciones<i class="material-icons">view_list</i></a></li>
        <li><a href="/booking/view-own/{{date('Y-m-d')}}/confirmed">Tus reservaciones<i class="material-icons">view_list</i></a></li>
        <li><div class="divider"></div></li>
        <li><div class="divider"></div></li>
        <li>
          <a class="red accent-3" href="/logout" onclick="return confirm('Are you sure you want to Sign-out?')">Salir<i class="material-icons">power_settings_new</i></a>
        </li>
      </ul>
    </div>
    </header>
    <main>
      <div class="container">
        @yield('content')
      </div>
    </main>

    <div>
      <footer class="page-footer grey darken-4">
            <h6 class="center-align" style="color: #ccc;">Franslux 2017. Todos los derechos reservados</h6>
      </footer>
    </div>

  </body>
  </html>
