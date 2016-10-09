<!-- Property of PT Topiqu Prima Multimedia -->
<!-- Coded by Edward Julius -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        
        <!-- Master Title and Favicon -->
        <title>topiqu &middot; topik pilihanqu</title>
        <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>

        <!-- Bootstrap CDN Start -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <!-- Bootstrap CDN End -->

        <!-- Font Work Sans -->
        <link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet' type='text/css'>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header pull-left navbar-logo">
                        <a class="navbar-brand" href="/"><img alt="Brand" src="{{ asset('/topiqulogo.png') }}" width="30px" height="30px"></a>
                </div>

                @if(Auth::check())
                <div class="navbar-header pull-right">
                    <div class="btn-group navbar-btn navbar-rightbtn navbar-hamburger" role="group">
                        <button type="button" class="btn btn-default dropdown-toggle btn-hamburger" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" aria-labelledby="dropdownMenu1">
                            <li><a href="/post">Post</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Messages</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Search</a></li>
                            <li><a href="#">Browse</a></li>
                            <li><a href="#">Subscription</a></li>
                            <li><a href="#">Settings</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
                @else
                <div class="navbar-header pull-right">
                    <ul class="nav navbar-nav" style="display: inline-block;">
                        <li><a href="/login">Masuk</a></li>
                        <li><a href="/register">Daftar</a></li>
                    </ul>
                </div>
                @endif
            </div>
        </nav>
        <!-- Custom Style -->
        <style>
            body {padding-top:70px; font-family: 'Work Sans', sans-serif;}
            .navbar-menubtn{padding-top: 3px; padding-right: 25px; padding-left:3px;}
            .navbar-hamburger{padding-top: 11px; padding-right:16px;}
            .navbar-credential{padding-top: 3px; padding-left:8px;} 
            .navbar{height: 50px; min-width: 100%;}
            .navbar-logo{position: relative; bottom: 6px; padding-left: 8px;}
            .btn-hamburger{padding: 0; border: none; background: none;}
        </style>
    </head>
    <body>
    <div class="container">
        @yield('content')
        <hr>
    </div>
    <center>
            © 2016 topiqu prima multimedia
        <br>
        <a href="/about">tentang kami</a> &middot; <a href="/contact">hubungi kami</a>
    </center>
    </body>
</html>

