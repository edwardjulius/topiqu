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

    <!-- Master Title and Favicon -->
    <title>topiqudotcom</title>
    <link rel="icon" href="{{ asset('/favicon.ico') }}">

  </head>
  <body>
    <style>
      input[type="search"] {height: 100% !important; padding-top: 21px;}
    </style>
    <header>
      <!-- Nav for small sized devices -->
      <div class="navbar-fixed hide-on-med-and-up">
        <nav class="light-blue darken-1">
          <div class="nav-wrapper container">
            <div class="brand-logo left" style="overflow: hidden;">
              <a href="/"><img src="{{ asset('/icon.svg') }}" style="max-width: 60px; height: auto;" /></a>
            </div>
            <ul id="nav-mobile" class="right">
            @if(Auth::check())
              <li><a href="#" data-activates="dropdown-notification" class="button-collapse"><i class="material-icons">notifications</i></a></li>
              <li><a href="#" data-activates="dropdown-messages" class="dropdown-button"><i class="material-icons">local_post_office</i></a></li>
              <li><a href="#" data-activates="dropdown-menu-small" class="dropdown-button"><i class="material-icons">menu</i></a>
                <ul id='dropdown-menu-small' class='dropdown-content' style="min-width: 136px;">
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">chat_bubble_outline</i>Post</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">perm_identity</i>Profile</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">settings</i>Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="/logout" class="blue-text text-darken-1"><i class="material-icons left">lock_open</i>Logout</a></li>
                </ul>
              </li>
            @else
              <li><a href="#" data-activates="dropdown-menu-small" class="dropdown-button"><i class="material-icons">menu</i></a>
                <ul id='dropdown-menu-small' class='dropdown-content' style="min-width: 129px;">
                  <li><a href="/login" class="blue-text text-darken-1"><i class="material-icons left">input</i>Masuk</a></li>
                  <li><a href="/register" class="blue-text text-darken-1"><i class="material-icons left">mode_edit</i>Daftar</a></li>
                  <li class="divider"></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                </ul>
              </li>
            @endif
            </ul>
          </div>
        </nav>
      </div>
      <!-- Nav for medium sized devices -->
      <div class="navbar-fixed hide-on-small-only hide-on-large-only col s12 m6">
        <nav class="light-blue darken-1">
          <div class="nav-wrapper container">
            <div class="brand-logo left" style="padding-top: 2px; overflow: hidden;">
              <a href="/"><img src="{{ asset('/icon.svg') }}" style="max-width: 60px; height: auto;" /></a>
            </div>
            <ul id="nav-mobile" class="right">
            @if(Auth::check())
              <li><a href="/" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">notifications</i></a></li>
              <li><a href="#" data-activates="dropdown-messages" class="dropdown-button"><i class="material-icons">local_post_office</i></a></li>
              <li><a href="#" data-activates="dropdown-menu-medium" class="dropdown-button"><i class="material-icons">menu</i></a>
                <ul id='dropdown-menu-medium' class='dropdown-content' style="min-width: 136px;">
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">chat_bubble_outline</i>Post</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">perm_identity</i>Profile</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">settings</i>Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="/logout" class="blue-text text-darken-1"><i class="material-icons left">lock_open</i>Logout</a></li>
                </ul>
              </li>
            @else
              <li><a href="/login" style="font-size:120%;"><i class="material-icons left">input</i>Masuk</a></li>
              <li><a href="/register" style="font-size:120%;"><i class="material-icons left">mode_edit</i>Daftar</a></li>
              <li><a href="#" data-activates="dropdown-menu-medium" class="dropdown-button"><i class="material-icons">menu</i></a>
                <ul id='dropdown-menu-medium' class='dropdown-content' style="min-width: 129px;">
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                  <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                </ul>
              </li>
            @endif
            </ul>
          </div>
        </nav>
      </div>
      <!-- Nav for large sized devices -->
      <div class="navbar-fixed hide-on-med-and-down">
        <nav class="light-blue darken-1">
          <div class="nav-wrapper">
            <div class="container">
              <div class="brand-logo left" style="overflow: hidden; padding-top: 3px;">
                <a href="/"><img style="max-width: 60px; height: auto;" src="{{ asset('/icon.svg') }}"/></a>
              </div>
              <form class="left" style="padding-left:54px;">
                <div class="input-field">
                  <input id="search" type="search" class="light-blue darken-1 white-text" required>
                  <label for="search"><i class="material-icons">search</i></label>
                </div>
              </form>
              <ul id="nav-mobile" class="right">
              @if(Auth::check())
                <li><a href="#" data-activates="mobile-demo"><i class="material-icons">notifications</i></a></li>
                <li><a href="#" data-activates="dropdown-messages" class="dropdown-button"><i class="material-icons">local_post_office</i></a></li>
                <li><a href="#" data-activates="dropdown-menu-large" class="dropdown-button"><i class="material-icons">menu</i></a>
                  <ul id='dropdown-menu-large' class='dropdown-content' style="min-width: 136px;">
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">chat_bubble_outline</i>Post</a></li>
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">perm_identity</i>Profile</a></li>
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">settings</i>Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="/logout" class="blue-text text-darken-1"><i class="material-icons left">lock_open</i>Logout</a></li>
                  </ul>
                </li>
              @else
                <li><a href="/login" style="font-size:130%;"><i class="material-icons left">input</i>Masuk</a></li>
                <li><a href="/register" style="font-size:130%;"><i class="material-icons left">mode_edit</i>Daftar</a></li>
                <li><a href="#" data-activates="dropdown-menu-large" class="dropdown-button"><i class="material-icons">menu</i></a>
                  <ul id='dropdown-menu-large' class='dropdown-content' style="min-width: 131px;">
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">search</i>Search</a></li>
                    <li><a href="#!" class="blue-text text-darken-1"><i class="material-icons left">visibility</i>Browse</a></li>
                  </ul>
                </li>
              @endif
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <main>
      <!-- Content -->
      <div class="content">
        @yield('content')
      </div>
    </main>
    <!-- End of Content -->
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
  </body>
</html>