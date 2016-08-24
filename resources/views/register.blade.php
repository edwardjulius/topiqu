@extends('master')
@section('content')
<style>
	.form-register {width: 90%; max-width: 400px; margin:auto; padding-top:30px;}
	.input-group {padding: 2px;}
	label{font-weight: normal;}
</style>
@if(count($errors))
	<div class="alert alert-danger" role="alert"> 
    @foreach($errors->all() as $error)
        <b>Error!</b> {{ $error }} <br>
    @endforeach
    </div>
@endif
<form class="form-register" role="form" method="POST" action="{{ url('/register') }}">
{{ csrf_field() }}
	<div class="panel panel-default">
	  <div class="panel-body">
			<div class="input-group">
			  <span class="input-group-addon" id="username"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
			  <input type="text" class="form-control" placeholder="Username" required="true" name="username" pattern="[A-Za-z0-9_-]{6,32}" title="Alphanumeric with '_', and '-' characters. Must be 6-32 characters.">
			</div>
			<div class="input-group">
			  <span class="input-group-addon" id="fullname"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></span>
			  <input type="text" class="form-control" placeholder="Full Name" required="true" name="fullname" pattern="[a-zA-Z0-9]+[a-zA-Z0-9 '-]+" title="Must contain at least 2 characters.">
			</div>
			<div class="input-group">
			  <span class="input-group-addon" id="email"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span></span>
			  <input type="email" class="form-control" placeholder="Email Address" required="true" name="email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,64}$" title="Please enter a valid email address.">
			</div>
			<div class="input-group">
				  <span class="input-group-addon" id="password"><span class="glyphicon glyphicon-asterisk" aria-hidden="true"></span></span>
			      <input type="password" class="form-control" placeholder="Password" required="true" name="password" id="passwordid" pattern=".{6,32}" title="Must contain 6-32 characters.">
			</div>
			<div class="input-group">
				  <span class="input-group-addon" id="confirm-password"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></span>
			      <input type="password" class="form-control" placeholder="Confirm Password" required="true" name="confirmpassword" id="confirmpasswordid">
			</div>
			<div class="input-group">
				<div class="input-group-addon">
				    <span class="glyphicon glyphicon-calendar"></span>
				</div>
		        <input class="form-control" id="dateofbirth" placeholder="Date of Birth" type="text" name="dateofbirth" required="true" pattern="\d{1,2}/\d{1,2}/\d{4}" title="Use the built in Calendar or you must enter a valid date. (dd/mm/yyyy)">
		    </div>

			<br>
			<center>
			  <label><input type="radio" name="gender" value="M" required="true"> Male </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			  <label><input type="radio" name="gender" value="F"> Female </label>
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
<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>

<script src='https://www.google.com/recaptcha/api.js'></script>

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

	$(function() {
    $( "#dateofbirth" ).datepicker({
    	format: 'dd/mm/yyyy',
    	startView: 2,
    	autoclose: true,
    });
  });
</script>
@endsection