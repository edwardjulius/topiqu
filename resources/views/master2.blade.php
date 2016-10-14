<!-- Property of PT Topiqu Prima Multimedia -->
<!-- Coded by Edward Julius -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Master Title and Favicon -->
    <title>topiqu &middot; topik pilihanqu</title>
    <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

    <!-- Material Design Lite CDN Start -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
    <!-- Material Design Lite CDN End -->

    <!-- Blue Indigo Color -->
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.blue-indigo.min.css" />

    <!-- Work Sans -->
    <link href='https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700' rel='stylesheet' type='text/css'>

    <!-- Custom Style -->
    <style>
        body {font-family: 'Work Sans', sans-serif;}
        .mdl-mini-footer__center-section
        {
            display: table;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
        }
        .search-form {padding-left: 15px; padding-top: 4px;}
        .mdl-layout__header-row {padding-left: 24px !important;}
    </style>

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title">
                    <a href="/"><img alt="Brand" src="{{ asset('/topiqulogo.png') }}" width="35px" height="35px"></a>
                </span>
                <div class="mdl-layout-title search-form">
                    <!-- start search form -->
                    <form action="#">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                         <label class="mdl-button mdl-js-button mdl-button--icon" for="text8">
                          <i class="material-icons">search</i>
                      </label>
                      <div class="mdl-textfield__expandable-holder">
                          <input class="mdl-textfield__input" type="text" id="text8">
                          <label class="mdl-textfield__label" for="sample-expandable">Expandable Input</label>
                      </div>
                  </div>
              </form>
              <!-- end search form -->
          </div>
          <!-- Add spacer, to align navigation to the right -->
          <div class="mdl-layout-spacer"></div>
          <!-- Navigation -->
          <nav class="mdl-navigation">
            @if(Auth::check())
            <!-- Right aligned menu below button -->
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="notification">
                <li class="mdl-menu__item">Messages</li>
                <li class="mdl-menu__item">Notifications</li>
            </ul>
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="menu">
                <li class="mdl-menu__item">Post</li>
                <li class="mdl-menu__item">Browse</li>
                <li class="mdl-menu__item">Subscription</li>
                <li class="mdl-menu__item">Profile</li>
                <li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Settings</li>
                <li class="mdl-menu__item">Logout</li>
            </ul>
            <button id="notification" class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">notifications</i>
            </button> &nbsp; &nbsp;
            <button id="menu" class="mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
            </button>
            @else
            <!-- User Login and Registration -->
            <a class="mdl-navigation__link" href="/login">Masuk</a>
            <a class="mdl-navigation__link" href="/register">Daftar</a>
            @endif
        </nav>
    </div>
</header>
<body>
    <main class="mdl-layout__content">
        <div class="page-content">
            @yield('content')
            <footer class="mdl-mini-footer">
                <div class="mdl-mini-footer__center-section">
                    <div class="mdl-logo">© 2016 TOPIQU PRIMA MULTIMEDIA</div>
                    <ul class="mdl-mini-footer__link-list">
                        <li><a href="/about">Tentang Topiqu</a></li>
                        <li><a href="/contact">Hubungi Kami</a></li>
                        <li><a href="/karir">Karir</a></li>
                        <li><a href="/wiki">Wiki</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </main>
</body>
</div>
</html>

