<style>
.dropdown {padding-top: 11px;}
</style>
@extends('master')
@section('content')
<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

@if(count($errors))
    @foreach($errors->all() as $error)
        <div class="alert alert-danger" role="alert">
			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			<span class="sr-only">Error:</span>
				{{ $error }}
		</div>
		<br>
    @endforeach
@endif

<form class="form-post" role="form" method="POST" action="{{ url('/post') }}">
{{ csrf_field() }}
	<div class="panel panel-default">
	  <!-- Default panel contents -->
		<div class="panel-heading"><b>Post</b></div>
			<div class="panel-body">
				<div class="form-group">
	  				<label for="title">Judul:</label>
	  				<input type="text" class="form-control" name="title" id="title" required="true" value="{{ old('title') }}">
				</div>
				<div class="form-group">
	  				<label for="url">URL:</label>
	  				<input type="text" class="form-control" name="url" id="url" value="{{ old('url') }}">
				</div>
				<div class="form-group">
	  				<label for="description">Embed:</label>
	  				<textarea class="form-control" name="embed" rows="3" id="embed" value="{{ old('embed') }}"></textarea>
				</div>
				<div class="form-group">
	  				<label for="description">Deskripsi:</label>
	  				<textarea class="form-control" name="description" rows="5" id="description" value="{{ old('description') }}"></textarea>
				</div>
				<div class="form-group">
	  				<label for="topiq">Topiq:</label>
	  				<input type="text" name="topiq" class="form-control" id="topiq" required="true" value="{{ old('topiq') }}">
				</div>
	 		</div>
	 		<center><button class="btn btn-default" type="submit" onclick="validateForm()">Post</button></center>
	 		<br>
	 	</div>
	</div>
</form>

<script>
function validateForm() {
	var url = document.getElementById("url");
	var description = document.getElementById("description");
	var embed = document.getElementById("embed");
	if(url.value == "" && description.value == "" && embed.value == "")
	{
		url.setCustomValidity("Anda tidak bisa meninggalkan semua entri 'URL', 'Embed', dan 'Deskripsi' kosong. Cukup masukkan setidaknya satu entri.");
	}
	else
	{
		url.setCustomValidity("");
	}
}

$(function()
{
	 $( "#topiq" ).autocomplete({
	  source: "/getThreadList",
	  minLength: 1
	});
});
</script>
@endsection