<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';
    protected $fillable = [
        'threadid', 'title', 'link', 'text', 'image'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }
}
