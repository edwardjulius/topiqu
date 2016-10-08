<?php

namespace App\Http\Controllers;

use App\Post;
use App\Vote;
use App\Http\Controllers\Controller;
use DB;
use App\Thread;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Response;

class VoteController extends Controller
{
    public function vote($postid)
    {
        $findVote = DB::table('votes')
            ->select('id')
            ->where('postid', $postid)
            ->where('userid', Auth::user()->id)
            ->first();

        if($findVote == null)
        {
            // If Vote doesn't exist, create a new vote
            $newVote = new Vote;
            $newVote->userid = Auth::user()->id;
            $newVote->postid = $postid;
            $newVote->save();

            DB::table('posts')->where('id', $postid)->increment('votecount');
            DB::table('posts')->where('id', $postid)->increment('totalcount');

            return back();
        }
        else
        {
            // Do nothing, the vote exists.
            return back();
        }
    }

    public function devote($postid)
    {
        $findVote = DB::table('votes')
            ->select('id')
            ->where('postid', $postid)
            ->where('userid', Auth::user()->id)
            ->first();
        if($findVote == null)
        {
            return back();
        }
        else
        {
            $deleteVote = DB::table('votes')
            ->select('id')
            ->where('postid', $postid)
            ->where('userid', Auth::user()->id)
            ->delete();

            DB::table('posts')->where('id', $postid)->decrement('votecount');
            DB::table('posts')->where('id', $postid)->decrement('totalcount');

            return back();
        }
    }
}