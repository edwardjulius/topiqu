<!-- Property of PT Topiqu Prima Multimedia -->
<!-- Coded by Edward Julius -->
<!DOCTYPE html>
<html>
    <head>
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
            .mdl-layout__header-row {padding-left: 24px !important;}
        </style>

        <body>
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header">
                    <div class="mdl-layout__header-row">
                        <!-- Title -->
                        <span class="mdl-layout-title">
                            <a href="/"><img alt="Brand" src="{{ asset('/topiqulogo.png') }}" width="35px" height="35px"></a>
                        </span>
                        <!-- Add spacer, to align navigation to the right -->
                        <div class="mdl-layout-spacer"></div>
                            <!-- Navigation -->
                            <nav class="mdl-navigation">
                                <a class="mdl-navigation__link" href="/login">Masuk</a>
                                <a class="mdl-navigation__link" href="/register">Daftar</a>
                                <!-- Right aligned menu below button -->
                                <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="material-icons">more_vert</i>
                                </button>

                                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
                                    <li class="mdl-menu__item">Some Action</li>
                                    <li class="mdl-menu__item">Another Action</li>
                                    <li disabled class="mdl-menu__item">Disabled Action</li>
                                    <li class="mdl-menu__item">Yet Another Action</li>
                                </ul>
                            </nav>
                    </div>
                </header>
                <main class="mdl-layout__content">
                    <div class="page-content">
                        @yield('content')
                        <hr>
                        <center>
                            <footer class="mdl-mini-footer">
                                <div class="mdl-mini-footer__center-section">
                                    <div class="mdl-logo">© 2016 topiqu prima multimedia</div>
                                    <ul class="mdl-mini-footer__link-list">
                                        <li><a href="/about">tentang topiqu</a></li>
                                        <li><a href="/contact">hubungi kami</a></li>
                                        <li><a href="/karir">karir</a></li>
                                        <li><a href="/wiki">wiki</a></li>
                                    </ul>
                                </div>
                            </footer>
                    </div>
                </main>
            </div>
        </body>
</html>

