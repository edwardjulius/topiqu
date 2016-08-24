@extends('master')
@section('content')
<style>
	.form-login {width: 90%; max-width: 400px; margin: auto; padding-top:30px;}
	.input-group {padding: 2px;}
	label{font-weight: normal;}
</style>
@if(count($errors))
	<div class="alert alert-danger" role="alert">
	<b>Error!</b> 
    @foreach($errors->all() as $error)
        {{ $error }}
    @endforeach
    </div>
@endif
<form class="form-login" method="POST" role="form" action="{{ url('/login') }}">
{{ csrf_field() }}
	<div class="panel panel-default">
	  <div class="panel-body">
			<div class="input-group">
			  <span class="input-group-addon" id="username"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
			  <input type="text" id="username" class="form-control" placeholder="Username" name="username" pattern="[A-Za-z0-9_-]{6,32}" title="A-Z, 0-9, '_', and '-' characters only. Must be 6-32 characters." required>
			</div>
			<div class="input-group">
				  <span class="input-group-addon" id="password"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
			      <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
			</div>
			<br>
			<center>
			<label class="unselectable"><input type="checkbox" value="rememberme"> Remember me</label>
			<br>
			<font size=2>
			<a href="/forgot">Forgot my password?</a>
			<br>
			<a href="/register">Don't have an account?</a>
			</font>
			</center>
			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
		</div>
	</div>
</form>
@endsection