<!-- topiqu.com -->
@extends('master')
@section('content')
@if(Auth::check())
  @if(Auth::user()->confirmed==0)
    <div class="alert alert-warning" role="alert"><b>Warning!</b> You have not authenticated your email address. Please check your email or click <a href="">here</a> to resend your verification code.</div>
  @endif
@endif
<ul class="nav nav-tabs">
  <li role="presentation"><a href="/">Trending</a></li>
  <li role="presentation"><a href="/top">Top</a></li>
  <li role="presentation" class="active"><a href="">New</a></li>
</ul>
<div class="media">
  <div class="media-left">
    <a href="#">
      <img class="media-object" data-src="..." alt="Generic placeholder image">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading">Top aligned media</h4>
    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
    <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
  </div>
</div>
@endsection