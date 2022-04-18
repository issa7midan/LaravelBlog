<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model
{
    //
    protected $table = 'postTypes';
    protected $fillable = [
        'postType',
    ];
    protected $casts = ["type"=>"string", "status"=>"integer"];
    public function post()
    {
        return $this->hasMany('App\Post','postTypeID');
    }
}
