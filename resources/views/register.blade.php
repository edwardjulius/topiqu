@extends('master')
@section('content')
<style>
	.form-register {width: 100%; max-width: 400px; margin:auto; padding-top:30px;}
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
<form class="form-register" role="form" method="POST" action="{{ url('/register') }}">
{{ csrf_field() }}
	<div class="panel panel-default">
	  <div class="panel-body">
			<div class="input-group">
			  <span class="input-group-addon" id="username"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
			  <input type="text" class="form-control" placeholder="Username" required="true" name="username" pattern="[A-Za-z0-9_-]{5,32}" title="Alphanumeric dengan '_' atau '-'. Musti diantara 5-32 karakter." value="{{ old('username') }}">
			</div>
			<div class="input-group">
			  <span class="input-group-addon" id="fullname"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			  <input type="text" class="form-control" placeholder="Full Name" required="true" name="fullname" pattern="^[a-zA-Z][a-zA-Z0-9-_\. ]{1,63}$" title="Musti diantara 2-64 karakter, dan alphanumeric." value="{{ old('fullname') }}">
			</div>
			<div class="input-group">
			  <span class="input-group-addon" id="email"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
			  <input type="email" class="form-control" placeholder="Email Address" required="true" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z0-9]{1,64}$" title="Tolong ketik dengan email address format yang benar." value="{{ old('email') }}">
			</div>
			<div class="input-group">
				  <span class="input-group-addon" id="password"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
			      <input type="password" class="form-control" placeholder="Password" required="true" name="password" id="passwordid" pattern=".{6,32}" title="Musti diantara 6-32 karakter.">
			</div>
			<div class="input-group">
				  <span class="input-group-addon" id="confirm-password"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></span>
			      <input type="password" class="form-control" placeholder="Confirm Password" required="true" name="confirmpassword" id="confirmpasswordid">
			</div>
			<div class="input-group">
				<div class="input-group-addon">
				    <span class="glyphicon glyphicon-calendar"></span>
				</div>
		        <input class="form-control" id="dateofbirth" placeholder="Date of Birth (dd/mm/yyyy)" type="text" name="dateofbirth" pattern="\d{1,2}/\d{1,2}/\d{4}" required="true" title="Tolong ketik tanggal lahir dengan format 'dd/mm/yyyy'. Contoh: 15/01/1992" value="{{ old('dateofbirth') }}">
		    </div>

			<br>
			<center>
			@if(old('gender') == "M")
				<label><input type="radio" name="gender" value="M" required="true" checked="checked"> Male </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			@else
				<label><input type="radio" name="gender" value="M" required="true"> Male </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			@endif
			@if(old('gender') == "F")
				<label><input type="radio" name="gender" value="F" required="true" checked="checked"> Female </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			@else
				<label><input type="radio" name="gender" value="F" required="true"> Female </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			@endif
			<br>
			<div class="checkbox">
  			<label>
   				<input type="checkbox" value="toc" required="true">
   				<font size="2">I agree to the <a href="/tos" target="popup" onclick="window.open('../html-link.htm','name','width=600,height=400')">Terms and Conditions</a> of this site.</font>
 			</label>
			</div>
			</center>

			<button class="btn btn-lg btn-primary btn-block" type="submit" onclick="validateForm()">Daftar</button>
		</div>
	</div>
</form>

<script>
function validateForm() {
	
	var confirmpassword = document.getElementById("confirmpasswordid");
	var password = document.getElementById("passwordid");
	var dateofbirth = document.getElementById("dateofbirth");
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