@extends('master3')
@section('content')
<div class="container">
  <ul class="tabs">
    <li class="tab"><a class="blue-text text-darken-1 active" target="_self" href="/">Trending</a></li>
    <li class="tab"><a class="blue-text text-darken-1" target="_self" href="/top">Top</a></li>
    <li class="tab"><a class="blue-text text-darken-1" target="_self" href="/new">New</a></li>
    @if(Auth::check())
    <li class="tab"><a class="blue-text" href="#sub">Sub</a></li>
    @endif
    <div class="indicator blue" style="z-index:1"></div>
  </ul>
  <div class="section">
    <!-- Dropdown Trigger -->
    <center>
      <a class='dropdown-button btn-floating btn-small waves-effect waves-light pink accent-3' href='#' data-activates='timeline-trending'><i class="material-icons left">query_builder</i></a></p>
    </center>
    <!-- Dropdown Structure -->
    <ul id='timeline-trending' class='dropdown-content' style="min-width: 86px;">
      <li><a href="/" class="pink-text text-accent-3">24 Jam</a></li>
      <li><a href="#!" class="blue-text text-darken-1">Minggu</a></li>
      <li><a href="#!" class="blue-text text-darken-1">Bulan</a></li>
      <li><a href="#!" class="blue-text text-darken-1">Tahun</a></li>
      <li><a href="#!" class="blue-text text-darken-1">Semua</a></li>
    </ul>
    @foreach($queries as $query)
    <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="card-panel z-depth-2">
          <div class="center">
            <div class="chip">
              &nbsp;
              <a href="#" class="black-text" style="font-weight: 300;">
                <img src="{{ asset('/svg_icons/perm_identity.svg') }}" alt="Username">
                {{$query->username}}
              </a>
              &nbsp;
            </div>
            <div class="chip">
              &nbsp;
              <a href="#" class="black-text" style="font-weight: 300;">
                <img src="{{ asset('/svg_icons/hashtag.svg') }}" alt="Topiq">
                {{$query->threadname}}
              </a>
              &nbsp;
            </div>
          </div>
          <br>
          <div style="font-weight: 300;">
            <div align="center" style="font-size: 150%;"> 
              {{$query->title}}
            </div>
            @if($query->description!='')
            <div align="left" style="font-size:120%;">
              <blockquote>
                {{$query->description}}
              </blockquote>
            </div>
            @endif
          </div>
          <br>
          @if($query->embed!='')
          <div align="center video-container" style="overflow: hidden;">
            {!!$query->embed!!}
            <br>
          </div>
          @endif
          <br>
          <div align="center">
            @if($query->voted==true)
            <a href="/api/devote/{{$query->id}}" class="black-text" style="font-weight: 300;">
              <div class="chip">
                &nbsp;
                <img src="{{ asset('/svg_icons/loved.svg') }}" alt="Loves">
                {{$query->votecount}}
                &nbsp;
              </div>
            </a>
            @else
            <a href="/api/vote/{{$query->id}}" class="black-text" style="font-weight: 300;">
              <div class="chip">
                &nbsp;
                <img src="{{ asset('/svg_icons/love.svg') }}" alt="Loves">
                {{$query->votecount}}
                &nbsp;
              </div>
            </a>
            @endif
            <div class="chip">
              &nbsp;
              <a href="#" class="black-text" style="font-weight: 300;">
                <img src="{{ asset('/svg_icons/comment.svg') }}" alt="Comments">
                {{$query->commentcount}}
              </a>
              &nbsp;
            </div>
          </div>
          <hr>
          <div class="left" style="font-weight: 300; font-size: 90%; padding-top: 6px;">{{$query->timeline}}</div>
          <div class="right">
            @if($query->url!='')
            <a href="{{$query->url}}" class="black-text"><i class="material-icons" style="padding-right: 4px;">launch</i></a>
            @endif
            <a href="#" class="black-text"><i class="material-icons">more_vert</i></a>
            <br>
          </div>
          <br>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
<style>
<style>
  .embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } 
  .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
</style>
    <!--
  <div class="row">
    <ul class="tabs">
      <li class="tab"><a class="blue-text active" href="#trending">Trending</a></li>
      <li class="tab"><a class="blue-text" href="#top">Top</a></li>
      <li class="tab"><a class="blue-text" href="#new">New</a></li>
      @if(Auth::check())
      <li class="tab"><a class="blue-text" href="#sub">Sub</a></li>
      @endif
      <div class="indicator blue" style="z-index:1"></div>
    </ul>
  </div>
  <CENTER>
  <div id="trending">
    <div class="col s6">
    @foreach ($queries as $query)
    <div class="card" style="display:block; overflow:auto;" id="postid-{{$query->id}}">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator">
      </div>
      <div class="card-content">
        <div class="left">
          <br>
          <a href="{{$query->url}}"><p class="flow-text"><h5>{{$query->title}}</h5></p></a>
          <br>
          <a class="waves-effect waves-light btn indigo lighten-2"><i class="material-icons right">favorite_border</i>{{$query->votecount}}</a>&nbsp;
          <a class="waves-effect waves-light btn indigo lighten-2"><i class="material-icons right">chat</i>{{$query->commentcount}}</a>&nbsp;
          <div class="chip">{{$query->username}}</div>
          <div class="chip">{{$query->threadname}}</div>
          <br><br>
        </div>
        <i class="material-icons right">more_vert</i>
        @if($query->embed != '')
        <a class="card-title activator grey-text text-darken-4" onclick="setIframeHeight(document.getElementById('postid-{{$query->id}}'));"><i class="material-icons right">open_in_browser</i></a>
        @endif
        <i class="material-icons right">open_in_new</i>
      </div>
      <div class="card-reveal" id="revealid-{{$query->id}}">
        <a class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></a>
        {!! $query->embed !!}
      </div>
    </div>
    @endforeach
    </div>
  </div>

  <div id="top">
  </div>
  <div id="new">
  </div>
  @if(Auth::check())
  <div id="sub">
  </div>
  @endif
  </CENTER>
  </div>
  <script>
  function setIframeHeight(iframe) {
  if (iframe) {
    var iframeWin = iframe.contentWindow || iframe.contentDocument.parentWindow;
    if (iframeWin.document.body) {
      iframe.height = iframeWin.document.documentElement.scrollHeight || iframeWin.document.body.scrollHeight;
    }
  }
};
  </script>
  -->
@endsection