@extends('master3')
@section('content')
<div class="white">
<div class="container">
  <ul class="tabs">
    <li class="tab"><a class="blue-text text-darken-1" target="_self" href="/">Trending</a></li>
    <li class="tab"><a class="blue-text text-darken-1" target="_self" href="/top">Top</a></li>
    <li class="tab"><a class="blue-text text-darken-1 active" target="_self" href="/new">New</a></li>
    @if(Auth::check())
    <li class="tab"><a class="blue-text" href="#sub">Sub</a></li>
    @endif
    <div class="indicator blue" style="z-index:1"></div>
  </ul>
</div>
</div>
<div class="grey lighten-5">
<div class="container grey lighten-5">
  <div class="section">
    @foreach($queries as $query)
    <div class="row">
      <div class="col s12 m12 l8 offset-l2">
        <div class="card-panel z-depth-2" style="overflow: hidden;">
          <div class="center">
            <div class="chip">
              &nbsp;
              <a href="#" class="black-text" style="font-weight: 300; font-size:120%;">
                <img src="{{ asset('/svg_icons/perm_identity.svg') }}" alt="Username">
                {{$query->username}}
              </a>
              &nbsp;
            </div>
            <div class="chip">
              &nbsp;
              <a href="#" class="black-text" style="font-weight: 300; font-size:120%;">
                <img src="{{ asset('/svg_icons/hashtag.svg') }}" alt="Topiq">
                {{$query->threadname}}
              </a>
              &nbsp;
            </div>
          </div>
          <br>
          <div style="font-weight: 300;">
            <div align="center" style="font-size: 150%; word-wrap: break-word;"> 
              {{$query->title}}
            </div>
            @if($query->description!='')
            <div align="left" style="font-size:100%; word-wrap: break-word;">
              <blockquote>
                <p>{{$query->description}}</p>
              </blockquote>
            </div>
            @endif
          </div>
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
              <div class="chip" style="font-size:110%;">
                &nbsp;
                <img src="{{ asset('/svg_icons/love.svg') }}" alt="Loves">
                {{$query->votecount}}
                &nbsp;
              </div>
            </a>
            @endif
            <a href="#" class="black-text" style="font-weight: 300;">
              <div class="chip" style="font-size:110%;">
                &nbsp;
                <img src="{{ asset('/svg_icons/comment.svg') }}" alt="Comments">
                {{$query->commentcount}}
                &nbsp;
              </div>
            </a>
          </div>
          <hr>
          <div class="left" style="font-weight: 300; font-size: 90%; padding-top: 6px;">{{$query->timeline}}</div>
          <div class="right">
            @if($query->url!='')
            <a href="{{$query->url}}" class="black-text"><i class="material-icons" style="padding-right: 4px;">launch</i></a>
            @endif
            @if($query->embed!='')
            <a href="#{{$query->id}}-modal" class="black-text modal-trigger"><i class="material-icons" style="padding-right: 4px;">ondemand_video</i></a>
            @endif
            <a href="" class="black-text dropdown-button" data-activates='{{$query->id}}_more_vert'><i class="material-icons">more_vert</i></a>
            <ul id='{{$query->id}}_more_vert' class='dropdown-content' style="min-width: 86px;">
              <li><a href="/" class="black-text">Share</a></li>
              <li><a href="#!" class="black-text">Report</a></li>
            </ul>
            <br>
          </div>
          <br>
        </div>
      </div>
    </div>
    @if($query->embed!='')
    <div id="{{$query->id}}-modal" class="modal">
      <div class="modal-content">
        <div style="overflow: hidden;" align="center">
          {!!$query->embed!!}
        </div>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat"><i class="material-icons">close</i></a>
      </div>
    </div>
    @endif
    @endforeach
    <div align="center"> 
      {!! (new Landish\Pagination\Simple\Materialize($queries))->render() !!}
    </div>
  </div>
</div>
</div>
<style>
  .embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; height: auto; } 
  .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
</style>
@endsection