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
use Carbon\Carbon;

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
            ->select('title', 'description', 'url', 'threadid', 'userid', 'id', 'totalcount', 'votecount', 'commentcount', 'created_at', 'embed')
            ->where('created_at', '>=', Carbon::now()->subDay())
            ->orderBy('totalcount', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

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

            if(Auth::user() != null)
            {
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
            }
            else
            {
                $query->voted = false;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
            $query->timeline = Carbon::parse($query->created_at)->diffForHumans();
        }
        return view('index', ['queries' => $queries]);
    }

    public function indexWeekly(Request $request)
    {
        $queries = DB::table('posts')
            ->select('title', 'description', 'url', 'threadid', 'userid', 'created_at', 'id', 'totalcount', 'votecount', 'commentcount', 'created_at', 'embed')
            ->where('created_at', '>=', Carbon::now()->subWeek())
            ->orderBy('totalcount', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
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

            if(Auth::user() != null)
            {
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
            }
            else
            {
                $query->voted = false;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
            $query->timeline = Carbon::parse($query->created_at)->diffForHumans();
        }
        return view('indexweekly', ['queries' => $queries]);
    }

    public function indexMonthly(Request $request)
    {
        $queries = DB::table('posts')
            ->select('title', 'description', 'url', 'threadid', 'userid', 'created_at', 'id', 'totalcount', 'votecount', 'commentcount', 'created_at', 'embed')
            ->where('created_at', '>=', Carbon::now()->subMonth())
            ->orderBy('totalcount', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
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

            if(Auth::user() != null)
            {
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
            }
            else
            {
                $query->voted = false;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
            $query->timeline = Carbon::parse($query->created_at)->diffForHumans();
        }
        return view('indexmonthly', ['queries' => $queries]);
    }

    public function indexYearly(Request $request)
    {
        $queries = DB::table('posts')
            ->select('title', 'description', 'url', 'threadid', 'userid', 'created_at', 'id', 'totalcount', 'votecount', 'commentcount', 'created_at', 'embed')
            ->where('created_at', '>=', Carbon::now()->subYear())
            ->orderBy('totalcount', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
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

            if(Auth::user() != null)
            {
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
            }
            else
            {
                $query->voted = false;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
            $query->timeline = Carbon::parse($query->created_at)->diffForHumans();
        }
        return view('indexyearly', ['queries' => $queries]);
    }

    public function indexAllTime(Request $request)
    {
        $queries = DB::table('posts')
            ->select('title', 'description', 'url', 'threadid', 'userid', 'created_at', 'id', 'totalcount', 'votecount', 'commentcount', 'created_at', 'embed')
            ->orderBy('totalcount', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);
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

            if(Auth::user() != null)
            {
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
            }
            else
            {
                $query->voted = false;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
            $query->timeline = Carbon::parse($query->created_at)->diffForHumans();
        }
        return view('indexalltime', ['queries' => $queries]);
    }

    public function top(Request $request)
    {
        $queries = DB::table('posts')
            ->select('title', 'description', 'url', 'threadid', 'userid', 'created_at', 'id', 'votecount', 'commentcount', 'created_at', 'embed')
            ->where('created_at', '>=', Carbon::now()->subDay())
            ->orderBy('votecount', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

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

            if(Auth::user() != null)
            {
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
            }
            else
            {
                $query->voted = false;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
            $query->timeline = Carbon::parse($query->created_at)->diffForHumans();
        }
        return view('top', ['queries' => $queries]);
    }

    public function topWeekly(Request $request)
    {
        $queries = DB::table('posts')
            ->select('title', 'description', 'url', 'threadid', 'userid', 'created_at', 'id', 'votecount', 'commentcount', 'created_at', 'embed')
            ->where('created_at', '>=', Carbon::now()->subWeek())
            ->orderBy('votecount', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

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

            if(Auth::user() != null)
            {
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
            }
            else
            {
                $query->voted = false;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
            $query->timeline = Carbon::parse($query->created_at)->diffForHumans();
        }
        return view('topweekly', ['queries' => $queries]);
    }

    public function topMonthly(Request $request)
    {
        $queries = DB::table('posts')
            ->select('title', 'description', 'url', 'threadid', 'userid', 'created_at', 'id', 'votecount', 'commentcount', 'created_at', 'embed')
            ->where('created_at', '>=', Carbon::now()->subMonth())
            ->orderBy('votecount', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

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

            if(Auth::user() != null)
            {
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
            }
            else
            {
                $query->voted = false;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
            $query->timeline = Carbon::parse($query->created_at)->diffForHumans();
        }
        return view('topmonthly', ['queries' => $queries]);
    }

    public function topYearly(Request $request)
    {
        $queries = DB::table('posts')
            ->select('title', 'description', 'url', 'threadid', 'userid', 'created_at', 'id', 'votecount', 'commentcount', 'created_at', 'embed')
            ->where('created_at', '>=', Carbon::now()->subYear())
            ->orderBy('votecount', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

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

            if(Auth::user() != null)
            {
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
            }
            else
            {
                $query->voted = false;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
            $query->timeline = Carbon::parse($query->created_at)->diffForHumans();
        }
        return view('topyearly', ['queries' => $queries]);
    }

    public function topAllTime(Request $request)
    {
        $queries = DB::table('posts')
            ->select('title', 'description', 'url', 'threadid', 'userid', 'created_at', 'id', 'votecount', 'commentcount', 'created_at', 'embed')
            ->orderBy('votecount', 'desc')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

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

            if(Auth::user() != null)
            {
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
            }
            else
            {
                $query->voted = false;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
            $query->timeline = Carbon::parse($query->created_at)->diffForHumans();
        }
        return view('topalltime', ['queries' => $queries]);
    }

    public function newBrowse(Request $request)
    {
        $queries = DB::table('posts')
            ->select('title', 'description', 'url', 'threadid', 'userid', 'created_at', 'id', 'votecount', 'commentcount', 'created_at', 'embed')
            ->orderBy('created_at', 'desc')
            ->paginate(10);

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

            if(Auth::user() != null)
            {
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
            }
            else
            {
                $query->voted = false;
            }

            $query->threadname = $threadname->name;
            $query->username = $username->username;
            $query->timeline = Carbon::parse($query->created_at)->diffForHumans();
        }
        return view('new', ['queries' => $queries]);
    }
}