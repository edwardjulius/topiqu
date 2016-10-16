<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
  	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<!--Import materialize.css-->
  	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
  	<!-- Icons -->
  	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  	<!-- Compiled and minified JavaScript -->
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  	<!--Let browser know website is optimized for mobile-->
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body class="indigo lighten-5">
    <style>
      input[type="search"] {height: 100% !important;}
    </style>
    <!-- Nav for small sized devices -->
    <nav class="blue darken-1 hide-on-med-and-up">
      <div class="nav-wrapper container">
        <a href="/" class="brand-logo left" style="padding-top: 3px;"><img src="{{ asset('/topiqulogo.png') }}"/></a>
        <ul id="nav-mobile" class="right">
        @if(Auth::check())
          <li><a href="#" data-activates="dropdown-notification" class="button-collapse"><i class="material-icons">notifications</i></a></li>
          <li><a href="#" data-activates="dropdown-messages" class="dropdown-button"><i class="material-icons">chat_bubble_outline</i></a></li>
          <li><a href="#" data-activates="dropdown-menu-small" class="dropdown-button"><i class="material-icons">menu</i></a>
            <ul id='dropdown-menu-small' class='dropdown-content'>
              <li><a href="#!" class="blue-text text-darken-1">Post</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Search</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Browse</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Profile</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Settings</a></li>
              <li class="divider"></li>
              <li><a href="/logout" class="blue-text text-darken-1">Logout</a></li>
            </ul>
          </li>
        @else
          <li><a href="#" data-activates="dropdown-menu-small" class="dropdown-button"><i class="material-icons">menu</i></a>
            <ul id='dropdown-menu-small' class='dropdown-content'>
              <li><a href="/login" class="blue-text text-darken-1">Masuk</a></li>
              <li><a href="/register" class="blue-text text-darken-1">Daftar</a></li>
              <li class="divider"></li>
              <li><a href="#!" class="blue-text text-darken-1">Search</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Browse</a></li>
            </ul>
          </li>
        @endif
        </ul>
      </div>
    </nav>
    <!-- Nav for medium sized devices -->
    <nav class="blue darken-1 hide-on-small-only hide-on-large-only">
      <div class="nav-wrapper container">
        <a href="/" class="brand-logo left" style="padding-top: 6px;"><img src="{{ asset('/topiqulogo.png') }}" height="50px" width="50px" /></a>
        <ul id="nav-mobile" class="right">
        @if(Auth::check())
          <li><a href="/" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">notifications</i></a></li>
          <li><a href="#" data-activates="dropdown-messages" class="dropdown-button"><i class="material-icons">chat_bubble_outline</i></a></li>
          <li><a href="#" data-activates="dropdown-menu-medium" class="dropdown-button"><i class="material-icons">menu</i></a>
            <ul id='dropdown-menu-medium' class='dropdown-content'>
              <li><a href="#!" class="blue-text text-darken-1">Post</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Search</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Browse</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Profile</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Settings</a></li>
              <li class="divider"></li>
              <li><a href="/logout" class="blue-text text-darken-1">Logout</a></li>
            </ul>
          </li>
        @else
          <li><a href="/login" style="font-size:120%;"><i class="material-icons left">input</i>Masuk</a></li>
          <li><a href="/register" style="font-size:120%;"><i class="material-icons left">mode_edit</i>Daftar</a></li>
          <li><a href="#" data-activates="dropdown-menu-medium" class="dropdown-button"><i class="material-icons">menu</i></a>
            <ul id='dropdown-menu-medium' class='dropdown-content'>
              <li><a href="#!" class="blue-text text-darken-1">Search</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Browse</a></li>
            </ul>
          </li>
        @endif
        </ul>
      </div>
    </nav>
    <!-- Nav for large sized devices -->
    <nav class="blue darken-1 hide-on-med-and-down">
      <div class="nav-wrapper container">
        <a href="/" class="brand-logo left" style="padding-top: 6px;"><img src="{{ asset('/topiqulogo.png') }}"/></a>
        <form class="left" style="padding-left:54px;">
          <div class="input-field">
            <input id="search" type="search" class="blue darken-1 white-text" required>
            <label for="search"><i class="material-icons">search</i></label>
          </div>
        </form>
        <ul id="nav-mobile" class="right">
        @if(Auth::check())
          <li><a href="#" data-activates="mobile-demo"><i class="material-icons">notifications</i></a></li>
          <li><a href="#" data-activates="dropdown-messages" class="dropdown-button"><i class="material-icons">chat_bubble_outline</i></a></li>
          <li><a href="#" data-activates="dropdown-menu-large" class="dropdown-button"><i class="material-icons">menu</i></a>
            <ul id='dropdown-menu-large' class='dropdown-content'>
              <li><a href="#!" class="blue-text text-darken-1">Post</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Search</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Browse</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Profile</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Settings</a></li>
              <li class="divider"></li>
              <li><a href="/logout" class="blue-text text-darken-1">Logout</a></li>
            </ul>
          </li>
        @else
          <li><a href="/login" style="font-size:130%;"><i class="material-icons left">input</i>Masuk</a></li>
          <li><a href="/register" style="font-size:130%;"><i class="material-icons left">mode_edit</i>Daftar</a></li>
          <li><a href="#" data-activates="dropdown-menu-large" class="dropdown-button"><i class="material-icons">menu</i></a>
            <ul id='dropdown-menu-large' class='dropdown-content'>
              <li><a href="#!" class="blue-text text-darken-1">Search</a></li>
              <li><a href="#!" class="blue-text text-darken-1">Browse</a></li>
            </ul>
          </li>
        @endif
        </ul>
      </div>
    </nav>
    <div class="container">
      @yield('content')
    </div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  </body>
  <footer class="page-footer grey darken-2">
    <div class="container grey darken-2">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Topiqu</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Tentang Topiqu</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Iklan</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Hubungi Kami</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Karir</a></li>
          </ul>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Informasi</h5>
          <ul>
            <li><a class="grey-text text-lighten-3" href="#!">Wiki</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Bantuan</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">FAQ</a></li>
            <li><a class="grey-text text-lighten-3" href="#!">Syarat dan Ketentuan</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright grey darken-4">
      <div class="container">
        © 2016 topiqudotcom
        <a title="Follow topiqudotcom on Twitter" href="http://www.twitter.com/topiqudotcom" class="right" style="padding-top: 10px;">&nbsp;<img alt="Follow topiqudotcom on Twitter" height="30px" width="30px" src="{{ asset('/svg_icons/twitter.svg') }}" border=0>&nbsp;</a>
        <a title="Follow topiqudotcom on Twitter" href="http://www.twitter.com/topiqudotcom" class="right" style="padding-top: 10px;">&nbsp;<img alt="Follow topiqudotcom on Twitter" height="30px" width="30px" src="{{ asset('/svg_icons/instagram.svg') }}" border=0>&nbsp;</a>
        <a title="Follow topiqudotcom on Twitter" href="http://www.twitter.com/topiqudotcom" class="right" style="padding-top: 10px;">&nbsp;<img alt="Follow topiqudotcom on Twitter" height="30px" width="30px" src="{{ asset('/svg_icons/facebook.svg') }}" border=0>&nbsp;</a>
        <a title="Follow topiqudotcom on Twitter" href="http://www.twitter.com/topiqudotcom" class="right" style="padding-top: 10px;">&nbsp;<img alt="Follow topiqudotcom on Twitter" height="30px" width="30px" src="{{ asset('/svg_icons/youtube.svg') }}" border=0>&nbsp;</a>
      </div>
    </div>
  </footer>
</html>