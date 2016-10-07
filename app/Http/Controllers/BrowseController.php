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
            ->select('title', 'description', 'url', 'threadid', 'userid')
            ->get();
        return view('index', ['queries' => $queries]);
    }
}