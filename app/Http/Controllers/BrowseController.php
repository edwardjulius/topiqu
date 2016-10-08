<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use DB;
use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Response;

class BrowseController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function index(Request $request)
    {
        $queries = DB::table('posts')
            ->select('title', 'description', 'url', 'threadid', 'userid', 'created_at', 'id', 'totalcount', 'votecount')
            ->orderBy('totalcount', 'desc')
            ->get();
        foreach($queries as $query)
        {
            $threadname = DB::table('threads')
                ->select('name')
                ->where('id', $query->threadid)
                ->first();

            $username = DB::table('users')
                ->select('username')
                ->where('id', $query->userid)
                ->first();

            $voted = DB::table('votes')
                ->select('id')
                ->where('postid', $query->id)
                ->where('userid', Auth::user()->id)
                ->first();

            if($voted == null)
            {
                $query->voted = false;
            }
            else
            {
                $query->voted = true;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
        }
        return view('index', ['queries' => $queries]);
    }
}