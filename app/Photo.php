<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    public $timestamps = false;
    protected $table = 'photos';
    protected $fillable = [
        'path'
    ];

    public function post ()
    {
        return $this->belongsTo('App\Post', 'post_id');
    }

    public function review()
    {
        return $this->belongsTo('App\Review', 'review_id');
    }
}
