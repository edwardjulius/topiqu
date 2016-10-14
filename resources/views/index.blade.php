<!-- topiqu.com -->
@extends('master2')
@section('content')

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
    <a href="#trending-panel" class="mdl-tabs__tab is-active">Trending</a>
    <a href="#top-panel" class="mdl-tabs__tab">Top</a>
    <a href="#new-panel" class="mdl-tabs__tab">New</a>
  </div>
  <div class="mdl-tabs__panel is-active" id="trending-panel">s
  </div>
  <div class="mdl-tabs__panel" id="top-panel">
  </div>
  <div class="mdl-tabs__panel" id="new-panel">
  </div>
</div>
@endsection