<!-- topiqu.com -->
<style>
.dropdown {padding-top: 11px;}
.glyphicon.glyphicon-heart {font-size: 25px;}
.glyphicon.glyphicon-heart-empty {font-size:25px;}
.votecount {font-size: 20px; padding-left: 3px;}
.media-body{padding-left: 10px; line-height: 90%;}
.media-left{padding-left: 5px; padding-top: 5px;}
.heart-empty{color: #FFB6C1;}
.heart{color: #FFB6C1;}
.media-heading{font-size: 18px;}
.media-detail{font-size:15px;}
.media-footer{font-size:15px; color: #696969;}
.img-toggle{color: #000000;}
.media{padding: 0px; margin: 0px;}
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
    <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> 1 bulan <b class="caret"></b></a>
    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
      <li><a href="/">24 jam</a></li>
      <li><a href="/weekly">1 minggu</a></li>
      <li><a>1 bulan</a></li>
      <li><a href="/yearly">1 tahun</a></li>
      <li><a href="/alltime">semua</a></li>
    </ul>
  </div>

</ul>

@foreach ($queries as $query)
<div class="media">
  <div class="media-left">
  <center>
    @if($query->voted==true)
    <a href="/api/devote/{{$query->id}}" class="heart"><span class="glyphicon glyphicon-heart"></span></a>
    @else
    <a href="/api/vote/{{$query->id}}" class="heart-empty"><span class="glyphicon glyphicon-heart-empty"></span></a>
    @endif
    <p class="votecount">{{$query->votecount}}</p>
    @if(ends_with($query->url, '.jpg'))
    <a class="img-toggle"><span class="glyphicon glyphicon-menu-right"></span></a>
    @endif
    </center>
  </div>
  <div class="media-body">
    <p class="media-heading"><h4 class="media-heading"><a href="{{$query->url}}">{{$query->title}}</a></h4></p>
    <p class="media-detail">di posting oleh <a href="/user/{{$query->username}}">{{$query->username}}</a> di <a href="/t/{{$query->threadname}}">{{$query->threadname}}</a></p>
    <p class="media-footer"><b><a href="/t/{{$query->threadname}}/{{$query->id}}" class="media-footer">{{$query->commentcount}} komentar</a> <a href="/t/{{$query->threadname}}/{{$query->id}}" class="media-footer">share</a> <a href="/t/{{$query->threadname}}/{{$query->id}}" class="media-footer">report</a></b></p>
  @if(ends_with($query->url, '.jpg') || ends_with($query->url, '.jpeg') || ends_with($query->url, '.png') || ends_with($query->url, '.gif') || ends_with($query->url, '.bmp'))
    <img src="{{$query->url}}">
  @endif
  </div>
  <hr>
</div>
@endforeach

<nav aria-label="...">
  <ul class="pager">
    <li class="previous"><a href="#"><span aria-hidden="true">&larr; sebelumnya</span></a></li>
    <li class="next"><a href="#"><span aria-hidden="true">berikutnya &rarr;</span></a></li>
  </ul>
</nav>
@endsection