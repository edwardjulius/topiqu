@extends('master')
@section('content')
@if($currentUser!=null)
<style>
    table{border-spacing: 5px;}
</style>
<div class="container">
    <center><h2>{{$currentUser->username}}</h2>
    <br>
    <table class="table">
        <tr>
            <td>Followers</td>
            <td>Following</td>
            <td>Posts</td>
        </tr>
        <tr>
            <td>{{$currentUser->followerCount}}</td>
            <td>{{$currentUser->followingCount}}</td>
            <td>{{$currentUser->postCount}}</td>
        </tr>
    </table>
    </center>
</div>
@else
<div class="alert alert-danger" role="alert"><b>Error!</b> No such user match our records. Click <a href="/">here</a> to go back to the homepage.</div>
@endif
@endsection