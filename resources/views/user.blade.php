@extends('master')
@section('content')
@if($currentUser!=null)
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>{{$currentUser->username}}</h2>
                    <p><strong>Full Name: </strong> {{$currentUser->fullname}} </p>
                    <p><strong>Topiqu Poster Since: </strong> {{$currentUser->created_at}} </p>
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong> 20,7K </strong></h2>                    
                    <p><small>Followers</small></p>
                    <button class="btn btn-success btn-block"><span class="fa fa-plus-circle"></span> Follow </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>245</strong></h2>                    
                    <p><small>Following</small></p>
                    <button class="btn btn-info btn-block"><span class="fa fa-user"></span> View Profile </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>43</strong></h2>                    
                    <p><small>Posts</small></p>
                    <div class="btn-group dropup btn-block">
                      <button type="button" class="btn btn-primary"><span class="fa fa-gear"></span> Options </button>
                      <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                    </div>
                </div>
            </div>
    	 </div>                 
		</div>
	</div>
</div>
@else
<div class="alert alert-danger" role="alert"><b>Error!</b> No such user match our records. Click <a href="/">here</a> to go back to the homepage.</div>
@endif
@endsection