<style>
.dropdown {padding-top: 11px;}
</style>
@extends('master')
@section('content')
<div class="panel panel-default">
  <!-- Default panel contents -->
	<div class="panel-heading"><b>Post</b></div>
		<div class="panel-body">
			<div class="form-group">
  				<label for="title">Title:</label>
  				<input type="text" class="form-control" id="title">
			</div>
			<div class="form-group">
  				<label for="url">URL:</label>
  				<input type="text" class="form-control" id="url">
			</div>
			<div class="form-group">
  				<label for="description">Description:</label>
  				<textarea class="form-control" rows="5" id="description"></textarea>
			</div>
			<div class="form-group">
  				<label for="topiq">Topiq:</label>
  				<input type="text" class="form-control" id="topiq">
			</div>
 		</div>
 		<center><button class="btn btn-default" type="button">Post</button></center>
 		<br>
 	</div>
</div>
@endsection

