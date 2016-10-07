<!-- topiqu.com -->
<style>
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
  @endif
@endif
<ul class="nav nav-tabs">
  <li role="presentation" class="active"><a href="/">Trending</a></li>
  <li role="presentation"><a href="/top">Top</a></li>
  <li role="presentation"><a href="/new">New</a></li>

  <div class="dropdown pull-right">
    <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> 24 jam <b class="caret"></b></a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
      <li><a>24 jam</a></li>
      <li><a href="/weekly">1 minggu</a></li>
      <li><a href="/monthly">1 bulan</a></li>
      <li><a href="/yearly">1 tahun</a></li>
      <li><a href="/alltime">semua</a></li>
    </ul>
  </div>

</ul>
@foreach ($queries as $query)
<div class="media">
  <div class="media-body">
    <h4 class="media-heading"><a href="{{$query->url}}">{{$query->title}}</a></h4>
    <p>{{$query->description}}</p>
    <p>posted by <a href="/user/{{$query->userid}}">{{$query->userid}}</a> di <a href="/t/{{$query->threadid}}">{{$query->threadid}}</a></p>
  </div>
</div>
<hr>
@endforeach
@endsection