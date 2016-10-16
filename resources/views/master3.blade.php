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
  <body>
  <style>
    input[type="search"] {height: 100% !important;}
  </style>
  	<nav>
  		<div class="nav-wrapper blue darken-2"><div class="container">
      <form class="brand-logo">
        <div class="input-field right">
          <input id="search" type="search" class="right blue darken-2 white-text" required>
          <label for="search" class="right"><i class="material-icons">search</i></label>
        </div>
      </form>
  			<ul id="nav-mobile" class="right">
  				<li><a href="/login">Masuk</a></li>
  				<li><a href="/register">Daftar</a></li>
  			</ul>
  		</div></div>
  	</nav>
  	<div class="container">
  	@yield('content')
  	</div>
  	<!--Import jQuery before materialize.js-->
  	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  	<script type="text/javascript" src="js/materialize.min.js"></script>
  </body>
  <footer class="page-footer grey darken-3">
  	<div class="container grey darken-3">
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
  			<a target="_blank" title="follow me on Twitter" href="http://www.twitter.com/PLACEHOLDER" class="right" style="padding-top: 10px;">&nbsp;<img alt="follow me on twitter" src="https://c866088.ssl.cf3.rackcdn.com/assets/twitter30x30.png" border=0>&nbsp;</a>
  			<a target="_blank" title="follow me on facebook" href="http://www.facebook.com/PLACEHOLDER" class="right" style="padding-top: 10px;">&nbsp;<img alt="follow me on facebook" src="https://c866088.ssl.cf3.rackcdn.com/assets/facebook30x30.png" border=0>&nbsp;</a>
  			<a target="_blank" title="follow me on youtube" href="http://www.youtube.com/PLACEHOLDER" class="right" style="padding-top: 10px;">&nbsp;<img alt="follow me on youtube" src="https://c866088.ssl.cf3.rackcdn.com/assets/youtube30x30.png" border=0>&nbsp;</a>
  		</div>
  	</div>
  </footer>
  </html>
