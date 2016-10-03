<style>
.dropdown {padding-top: 11px;}
</style>
@extends('master')
@section('content')
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><b>Hubungi Kami</b></div>
  <div class="panel-body">
  <div class="form-group">
  <label for="subject">Subject:</label>
  <input type="text" class="form-control" id="subject">
</div>
<div class="form-group">
  <label for="Message">Message:</label>
  <textarea class="form-control" rows="5" id="Message"></textarea>
</div>
 </div>
 <center><button class="btn btn-default" type="button">Send</button></center>
 <br>
</div>
@endsection