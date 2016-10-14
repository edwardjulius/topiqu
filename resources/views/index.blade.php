<!-- topiqu.com -->
@extends('master2')
@section('content')
<style>
  .demo-card-wide.mdl-card {
    width: 512px;
  }
  .demo-card-wide > .mdl-card__title {
    color: #fff;
    height: 176px;
    background: url('../assets/demos/welcome_card.jpg') center / cover;
  }
  .demo-card-wide > .mdl-card__menu {
    color: #fff;
  }
</style>

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
    <a href="#trending-panel" class="mdl-tabs__tab is-active">Trending</a>
    <a href="#top-panel" class="mdl-tabs__tab">Top</a>
    <a href="#new-panel" class="mdl-tabs__tab">New</a>
  </div>
  <br>
  <center>
  <!-- Left aligned time below button -->
  <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon">
    <i class="material-icons">watch_later</i>
  </button>

  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
    <li disabled class="mdl-menu__item">24 jam</li>
    <li class="mdl-menu__item">1 minggu</li>
    <li class="mdl-menu__item">1 bulan</li>
    <li class="mdl-menu__item">1 tahun</li>
    <li class="mdl-menu__item">semua</li>
  </ul>
  <!-- End of time button -->
  </center>
  <br>
  <div class="mdl-tabs__panel is-active" id="trending-panel">
    <center>
      @foreach ($queries as $query)
      <div class="demo-card-wide mdl-card mdl-shadow--2dp">
        <div class="mdl-card__title">
          <h2 class="mdl-card__title-text"><a href="{{$query->url}}">{{$query->title}}</a></h2>
        </div>
        <div class="mdl-card__supporting-text">
          {{$query->description}}
        </div>
        <div class="mdl-card__actions mdl-card--border">
          <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
            Get Started
          </a>
        </div>
        <div class="mdl-card__menu">
          <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
            <i class="material-icons">share</i>
          </button>
        </div>
      </div>
      @endforeach
    </center>
  </div>
  <div class="mdl-tabs__panel" id="top-panel">
  </div>
  <div class="mdl-tabs__panel" id="new-panel">
  </div>
</div>
<br>
@endsection