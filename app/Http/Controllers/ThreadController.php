<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Auth;
use DB;
use Response;

class ThreadController extends Controller
{
    public function getThreadList()
    {
    	$term = Input::get('term');

        $queries = DB::table('threads')
        	->select('id', 'name')
        	->where('name', 'LIKE', '%'.$term.'%')
            ->get();

        $result = array();

        foreach($queries as $query)
        {
        	$result[] = [ 'id' => $query->id, 'value' => $query->name ];
        }   
        return Response::json($result);
    }
}