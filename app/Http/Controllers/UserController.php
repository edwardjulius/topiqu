<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;
use App;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($username)
    {
        // Query only non essential information from the user
        $currentUser = DB::table('users')
            ->select('username', 'fullname', 'created_at', 'gender', 'dateofbirth', 'id')
            ->where('username', $username)
            ->first();

        // Error Handling if no username exists with the given name
        if($currentUser == null)
        {
            return view('user', ['currentUser' => $currentUser]);
        }

        $followerCount = App\Follower::where('userid', $currentUser->id)->count();
        $followingCount = App\Follower::where('followerid', $currentUser->id)->count();
        $postCount = App\Post::where('userid', $currentUser->id)->count();

        $currentUser->followerCount = $followerCount;
        $currentUser->followingCount = $followingCount;
        $currentUser->postCount = $postCount;

        // Display a view and pass the currentUser we queried
        return view('user', ['currentUser' => $currentUser]);
    }
}