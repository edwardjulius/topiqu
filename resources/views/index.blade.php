<!-- topiqu.com -->
@extends('master2')
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
    @if($query->embed != '')
    <center>
    <div class="media-embed">
      {!! $query->embed !!}
    </div>
    </center>
    @endif
  </div>
  <hr>
</div>
@endforeach
<center>
<div class="pagination"> {{ $queries->links() }} </div>
</center>
@endsection