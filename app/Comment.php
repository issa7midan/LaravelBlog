<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $casts = ["first_name"=>"string", "last_name"=>"string", "email"=>"string", "comment"=>"string", "status"=>"integer"];
    protected $table = 'comments';
    protected $fillable = ['first_name', 'last_name', 'email', 'comment',];

    public function post()
    {
        return $this->belongsTo('App\Post',  'post_id');
    }
}