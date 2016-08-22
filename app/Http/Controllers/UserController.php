<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use DB;

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
            ->select('username', 'fullname', 'created_at', 'gender', 'dateofbirth')
            ->where('username', $username)
            ->first();

        // Display a view and pass the currentUser we queried
        return view('user', ['currentUser' => $currentUser]);
    }
}