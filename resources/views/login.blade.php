@extends('master')
@section('content')
<style>
	.form-login {width: 90%; max-width: 400px; margin: auto; padding-top:30px;}
	.input-group {padding: 2px;}
	label{font-weight: normal;}
</style>
@if(count($errors))
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif
<form class="form-login" method="POST" role="form" action="{{ url('/login') }}">
{{ csrf_field() }}
	<div class="panel panel-default">
	  <div class="panel-body">
			<div class="input-group">
			  <span class="input-group-addon" id="username"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
			  <input type="text" id="username" class="form-control" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				  <span class="input-group-addon" id="password"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
			      <input type="password" id="password" class="form-control" placeholder="Password" name="password" required>
			</div>
			<br>
			<center>
			<label class="unselectable"><input type="checkbox" value="rememberme"> Ingat akun saya</label>
			<br>
			<font size=2>
			<a href="/forgot">Lupa sandi?</a>
			<br>
			<a href="/register">Belum daftar akun?</a>
			</font>
			</center>
			<br>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
		</div>
	</div>
</form>
@endsection