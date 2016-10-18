@extends('masternofooter')
@section('content')
<div class="container">
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
	<div class="row">
	    <form class="col s8 offset-s2" method="POST" role="form" action="{{ url('/login') }}">
	    	{{ csrf_field() }}
	      	<div class="row">
	        	<div class="input-field col s12">
	          		<input id="username" type="text" class="validate" name="username" value="{{ old('username') }}" required>
	          		<label for="username">Username</label>
	        	</div>
	        	<div class="input-field col s12">
	          		<input id="password" type="password" class="validate" name="password" required>
	          		<label for="password">Password</label>
	        	</div>
	        	<p>
	        		<center>
				      	<input type="checkbox" id="rememberme" value="rememberme"/>
				      	<label for="rememberme">Ingat Akun</label><br><br>
		   				<a href="/forgot">Lupa kredensial?</a><br>
		   				<a href="/register">Belum Daftar?</a>
		   			</center>
	   			</p>
	   			<br>
	   			<center>
	      			<button class="btn btn-lg btn-primary btn-block pink accent-3" type="submit">Masuk</button>
	      		</center>
	      	</div>
	    </form>
	</div>
</div>
@endsection