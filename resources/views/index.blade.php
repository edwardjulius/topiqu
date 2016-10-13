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
  <center>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
  <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
  <span class="mdl-radio__label">24 jam</span>
</label>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
  <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
  <span class="mdl-radio__label">1 minggu</span>
</label>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-3">
  <input type="radio" id="option-3" class="mdl-radio__button" name="options" value="3">
  <span class="mdl-radio__label">1 bulan</span>
</label>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-4">
  <input type="radio" id="option-4" class="mdl-radio__button" name="options" value="4">
  <span class="mdl-radio__label">1 tahun</span>
</label>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-5">
  <input type="radio" id="option-5" class="mdl-radio__button" name="options" value="5">
  <span class="mdl-radio__label">semua</span>
</label>
</center>
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