<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';
    protected $fillable = [
        'userid', 'threadid', 'title', 'url', 'description'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
