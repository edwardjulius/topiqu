@extends('master3')
@section('content')
<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col m3 s12"><a class="blue-text" href="#trending">Trending</a></li>
            <li class="tab col m3 s12"><a class="blue-text" href="#top">Top</a></li>
            <li class="tab col m3 s12"><a class="blue-text" href="#new">New</a></li>
            <div class="indicator blue" style="z-index:1"></div>
        </ul>
    </div>
    <div id="trending" class="col s12 right-align">
    </div>
    <div id="top" class="col s12">
    </div>
    <div id="new" class="col s12">
    </div>
</div>
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator">
    </div>
    <div class="card-content">
      <i class="material-icons right">more_vert</i><span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">open_in_browser</i></span><i class="material-icons right">open_in_new</i>
      <p><a href="#">This is a link</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
@endsection