<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable = [
        'postTypeID','content','title','user_id','thumbnail'
    ];
    public function User()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function PostType()
    {
        return $this->belongsTo('App\PostType','postTypeID');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment', 'post_id');
    }

    public function photo()
    {
        return $this->hasMany('App\Photo', 'post_id');
    }
}
