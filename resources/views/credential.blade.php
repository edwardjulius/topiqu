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
        <!-- Custom Style -->
        <style>
            body {padding-top:65px; font-family: 'Work Sans', sans-serif;}
        </style>
    </head>
    <body>
    <div class="container-fluid">
        <div class="row">
            <!-- Content -->
            <div class="col-md-12">@yield('content')</div>
        </div>
    </div>
    <hr>
    <center>
        Copyright 2016, PT Topiqu Prima Multimedia.
    </center>
    </body>
</html>
