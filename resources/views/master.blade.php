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

        <!-- Bootstrap CDN Start -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- Bootstrap CDN End -->
        <!-- Font Work Sans -->
        <link href='https://fonts.googleapis.com/css?family=Work+Sans' rel='stylesheet' type='text/css'>

        <!-- Custom Style -->
        <style>
            body {width:100%; padding-top:65px; font-family: 'Work Sans', sans-serif;}
            .navbar-btn {padding-right:5px;}
        </style>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header pull-left">
                <a class="navbar-brand" href="/">topiqu</a>
            </div>
            <div class="navbar-header pull-right">
                <div class="btn-group navbar-btn" role="group">
                @if(Auth::check())
                    <a href="/user/{{Auth::user()->username}}" class="btn btn-default">My Profile</a>
                    <a href="/logout/" class="btn btn-default">Logout</a>
                @else
                    <a href="/login/" class="btn btn-default">Masuk</a>
                    <a href="/register" class="btn btn-default">Daftar</a>
                @endif
                </div>
            </div>
         </nav>
         <div class="container">
            @yield('content')
            <hr>
            <center>
            Copyright 2016, PT Topiqu Prima Multimedia.
            </center>
         </div>
    </body>
</html>
