<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

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
        $currentUser = App\User::where('username', '=', $username)->firstOrFail();
        return "test only " + $currentUser.username;
    }
}