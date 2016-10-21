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
	    <form class="col s8 offset-s2" method="POST" role="form" action="{{ url('/register') }}">
	    	{{ csrf_field() }}
	      	<div class="row">
	        	<div class="input-field col s12">
	          		<input type="text" class="form-control" placeholder="Username" required="true" name="username" pattern="[A-Za-z0-9_-]{5,32}" title="Alphanumeric dengan '_' atau '-'. Musti diantara 5-32 karakter." value="{{ old('username') }}">
	          		<label for="username">Username</label>
	        	</div>
	        	<div class="input-field col s12">
	          		<input type="text" class="form-control" placeholder="Full Name" required="true" name="fullname" pattern="^[a-zA-Z][a-zA-Z0-9-_\. ]{1,63}$" title="Musti diantara 2-64 karakter, dan alphanumeric." value="{{ old('fullname') }}">
	          		<label for="password">Fullname</label>
	        	</div>
	        	<div class="input-field col s12">
	          		<input type="email" class="form-control" placeholder="Email Address" required="true" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z0-9]{1,64}$" title="Tolong ketik dengan email address format yang benar." value="{{ old('email') }}">
	          		<label for="password">Email Address</label>
	        	</div>
	        	<div class="input-field col s12">
	          		 <input type="password" class="form-control" placeholder="Password" required="true" name="password" id="passwordid" pattern=".{6,32}" title="Musti diantara 6-32 karakter.">
	          		<label for="password">Password</label>
	        	</div>
	        	<div class="input-field col s12">
	          		<input type="password" class="form-control" placeholder="Confirm Password" required="true" name="confirmpassword" id="confirmpasswordid">
	          		<label for="password">Confirm Password</label>
	        	</div>
	        	<p>
	        		<center>
				      	<input type="checkbox" id="rememberme" value="rememberme"/>
				      	<label for="tos">I agree to the <a href="/tos" target="popup" onclick="window.open('../html-link.htm','name','width=600,height=400')">Terms and Conditions</a> of this site.
				      	</label>
				      	<div class="g-recaptcha" data-sitekey="6LfLwQkUAAAAAJpTYsr5LQjalfiV57GMm1dvuCZ1" style="transform:scale(0.77);transform-origin:0 0; padding-left: 255px;"></div>
		   			</center>
	   			</p>
	   			<center>
	      			<button class="btn btn-lg btn-primary btn-block pink accent-3" type="submit">Daftar</button>
	      		</center>
	      	</div>
	    </form>
	</div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
function validateForm() {
	
	var confirmpassword = document.getElementById("confirmpasswordid");
	var password = document.getElementById("passwordid");
	if(confirmpassword.value != password.value)
	{
		confirmpassword.setCustomValidity("Password must match.")
	}
	else
	{
		confirmpassword.setCustomValidity("");
	}
}
</script>
@endsection