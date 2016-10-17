@extends('master3')
@section('content')
<div class="container">
  <div class="row">
    <ul class="tabs">
      <li class="tab"><a class="blue-text" href="#trending">Trending</a></li>
      <li class="tab"><a class="blue-text" href="#top">Top</a></li>
      <li class="tab"><a class="blue-text" href="#new">New</a></li>
      <div class="indicator blue" style="z-index:1"></div>
    </ul>
  </div>
  <div id="trending">
    @foreach ($queries as $query)
    <div class="card" style="display:block; overflow: auto;">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator">
      </div>
      <div class="card-content">
        <div class="left">
          <p>asdf</p>
          <p>asdf</p>
          <a class="waves-effect waves-light btn blue darken-4"><i class="material-icons right">favorite_border</i>{{$query->votecount}}</a>&nbsp;
          <a class="waves-effect waves-light btn blue darken-4"><i class="material-icons right">chat</i>{{$query->commentcount}}</a>
        </div>
        <!-- The 3 icons below are all aligned to the right-->
        <i class="material-icons right">more_vert</i>
        <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">open_in_browser</i></span>
        <i class="material-icons right">open_in_new</i>
        <br>&nbsp;
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      </div>
    </div>
    @endforeach
  </div>

  <div id="top">
  </div>
  <div id="new">
  </div>
</div>
@endsection