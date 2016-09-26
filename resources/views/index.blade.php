<!-- topiqu.com -->
<style>
.dropdown-tab {padding-top: 11px;}
.btn-loadmore{text-align: center;}
.btn-backtotop{text-align: right;}
.dropdown {padding-top: 11px;}
</style>
@extends('master')
@section('content')

@if(Auth::check())
  @if(Auth::user()->confirmed==0)
    <div class="alert alert-warning" role="alert">
      <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
      <span class="sr-only">Error:</span>
        You have not authenticated your email address. Please check your email or click <a href="">here</a> to resend your verification code.
    </div>
    <br>
  @endif
@endif

<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="">Trending</a></li>
  <li role="presentation"><a href="/top">Top</a></li>
  <li role="presentation"><a href="/new">New</a></li>
  <div class="dropdown pull-right">
    <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> 24 jam <b class="caret"></b></a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
      <li><a tabindex="-1" href="#">Action</a></li>
      <li><a tabindex="-1" href="#">Another action</a></li>
      <li><a tabindex="-1" href="#">Something else here</a></li>
      <li class="divider"></li>
      <li><a tabindex="-1" href="#">Separated link</a></li>
    </ul>
  </div>
</ul>

<div class="media">
  <div class="media-left">
  <h4 class="media-heading"><p align=center>123 <span class="glyphicon glyphicon-heart"></span></p></h4>
    <a href="#">
      <img class="media-object" data-src="..." alt="Thumbnail Thumbnail Thumbnail Thumbnail" height="80" width="80">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="#">Title title title title title title</a></h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p><a href="#">123 comments</a> <a href="#">share</a> <a href="#">flag</a></p>
    <p>posted by<a href="#"> eddard </a>in<a href="#"> berita </a> 2 hours ago.</p>
  </div>
</div>
<hr>
<div class="media">
  <div class="media-left">
  <h4 class="media-heading"><p align=center>123</p></h4>
    <a href="#">
      <img class="media-object" data-src="..." alt="Thumbnail Thumbnail Thumbnail Thumbnail" height="80" width="80">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="#">Title title title title title title</a></h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p><a href="#">123 comments</a> <a href="#">share</a> <a href="#">flag</a></p>
    <p>posted by<a href="#"> eddard </a>in<a href="#"> berita </a> 2 hours ago.</p>
  </div>
</div>
<hr>
<div class="media">
  <div class="media-left">
  <h4 class="media-heading"><p align=center>123</p></h4>
    <a href="#">
      <img class="media-object" data-src="..." alt="Thumbnail Thumbnail Thumbnail Thumbnail" height="80" width="80">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="#">Title title title title title title</a></h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p><a href="#">123 comments</a> <a href="#">share</a> <a href="#">flag</a></p>
    <p>posted by<a href="#"> eddard </a>in<a href="#"> berita </a> 2 hours ago.</p>
  </div>
</div>
<hr>
<div class="media">
  <div class="media-left">
  <h4 class="media-heading"><p align=center>123</p></h4>
    <a href="#">
      <img class="media-object" data-src="..." alt="Thumbnail Thumbnail Thumbnail Thumbnail" height="80" width="80">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="#">Title title title title title title</a></h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p><a href="#">123 comments</a> <a href="#">share</a> <a href="#">flag</a></p>
    <p>posted by<a href="#"> eddard </a>in<a href="#"> berita </a> 2 hours ago.</p>
  </div>
</div>
<hr>
<div class="media">
  <div class="media-left">
  <h4 class="media-heading"><p align=center>123</p></h4>
    <a href="#">
      <img class="media-object" data-src="..." alt="Thumbnail Thumbnail Thumbnail Thumbnail" height="80" width="80">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="#">Title title title title title title</a></h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p><a href="#">123 comments</a> <a href="#">share</a> <a href="#">flag</a></p>
    <p>posted by<a href="#"> eddard </a>in<a href="#"> berita </a> 2 hours ago.</p>
  </div>
</div>
<hr>
<div class="media">
  <div class="media-left">
  <h4 class="media-heading"><p align=center>123</p></h4>
    <a href="#">
      <img class="media-object" data-src="..." alt="Thumbnail Thumbnail Thumbnail Thumbnail" height="80" width="80">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><a href="#">Title title title title title title</a></h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p><a href="#">123 comments</a> <a href="#">share</a> <a href="#">flag</a></p>
    <p>posted by<a href="#"> eddard </a>in<a href="#"> berita </a> 2 hours ago.</p>
  </div>
</div>  
<br>
<div class="btn-loadmore">
  <button type="button" class="btn btn-default btn-sm">
    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Load More
  </button>
</div>

@endsection