@extends('master')
@section('content')
<style>
	.form-login {width: 90%; max-width: 400px; margin: auto; padding-top:20px;}
	.input-group {padding: 2px;}
</style>
<form class="form-login" method="post">
{{ csrf_field() }}
	<div class="panel panel-default">
	  <div class="panel-body">
			<div class="input-group">
			  <span class="input-group-addon" id="email"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
			  <input type="email" class="form-control" placeholder="Email Address" required>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Reset Password</button>
		</div>
	</div>
</form>
@endsection