<!-- topiqu.com -->
@extends('master2')
@section('content')

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar">
    <a href="#trending-panel" class="mdl-tabs__tab is-active">Trending</a>
    <a href="#top-panel" class="mdl-tabs__tab">Top</a>
    <a href="#new-panel" class="mdl-tabs__tab">New</a>
  </div>

  <div class="mdl-tabs__panel is-active" id="trending-panel">
    <ul>
      <li>Eddard</li>
      <li>Catelyn</li>
      <li>Robb</li>
      <li>Sansa</li>
      <li>Brandon</li>
      <li>Arya</li>
      <li>Rickon</li>
    </ul>
  </div>
  <div class="mdl-tabs__panel" id="top-panel">
    <ul>
      <li>Tywin</li>
      <li>Cersei</li>
      <li>Jamie</li>
      <li>Tyrion</li>
    </ul>
  </div>
  <div class="mdl-tabs__panel" id="new-panel">
    <ul>
      <li>Viserys</li>
      <li>Daenerys</li>
    </ul>
  </div>
</div>
@endsection