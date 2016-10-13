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
        <style>body {font-family: 'Work Sans', sans-serif;}</style>
        <body>
            <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
                <header class="mdl-layout__header">
                    <div class="mdl-layout__header-row">
                        <!-- Title -->
                        <span class="mdl-layout-title"><a href="/"><img alt="Brand" src="{{ asset('/topiqulogo.png') }}" width="35px" height="35px"></a></span>
                        <!-- Add spacer, to align navigation to the right -->
                        <div class="mdl-layout-spacer"></div>
                            <!-- Navigation. We hide it in small screens. -->
                            <nav class="mdl-navigation mdl-layout--large-screen-only">
                                <a class="mdl-navigation__link" href="/login">Masuk</a>
                                <a class="mdl-navigation__link" href="/register">Daftar</a>
                            </nav>
                    </div>
                </header>
                <div class="mdl-layout__drawer">
                    <nav class="mdl-navigation">
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                        <a class="mdl-navigation__link" href="">Link</a>
                    </nav>
                </div>
                <main class="mdl-layout__content">
                    <div class="page-content">
                        @yield('content')
                        <hr>
                        <center>
                            <a href="/about">tentang topiqu</a> &middot; <a href="/contact">hubungi kami</a> &middot; <a href="/karir">karir</a>
                            <br>
                            © 2016 topiqu prima multimedia
                        </center>
                    </div>
                </main>
            </div>
        </body>
</html>

