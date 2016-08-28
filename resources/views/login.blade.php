@extends('credential')
@section('content')
<style>
	.form-login {max-width: 400px; margin: auto; padding-top:30px;}
	.input-group {padding: 2px;}
	label{font-weight: normal;}
</style>
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
<form class="form-login" method="POST" role="form" action="{{ url('/login') }}">
{{ csrf_field() }}
	<div class="panel panel-default">
	  <div class="panel-body">
			<div class="input-group">
			  <span class="input-group-addon" id="username"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
			  <input type="text" id="username" class="form-control" placeholder="Username" name="username" value="{{ old('username') }}" required>
			</div>
			<div class="input-group">
				  <span class="input-group-addon" id="password"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
			      <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
			</div>
			<br>
			<center>
			<label class="unselectable"><input type="checkbox" value="rememberme"> Ingat akun</label>
			<br>
			<font size=2>
			<a href="/forgot">Lupa kredensial?</a>
			<br>
			<a href="/register">Belum Daftar?</a>
			</font>
			</center>
			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
		</div>
	</div>
</form>
@endsection