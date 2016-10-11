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

class PostController extends Controller
{
    public function post(Request $request)
    {
        $topiq = $request->topiq;
        $thread = DB::table('threads')
            ->select('id')
            ->where('name', $topiq)
            ->first();
        // If topiq name doesn't exist, redirect with error
        if($thread == null)
        {
            return redirect('/post')
                        ->withErrors("Topiq yang anda pilih tidak ada. Pilih topiq dengan mengunakan fitur autocomplete kami.")
                        ->withInput();
        }
        // Create a new post
        $post = new Post;
        $post->title = $request->title;
        $post->url = $request->url;
        $post->description = $request->description;
        $post->threadid = $thread->id;
        $post->embed = $request->embed;
        $post->userid = Auth::user()->id;
        $post->save();
        return redirect('/');
    }
}