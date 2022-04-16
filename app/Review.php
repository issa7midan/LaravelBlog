<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = 'reviews';
    protected $fillable = [
        'first_name', 'last_name', 'email', 'comment',
    ];

    public function photo ()
    {
        return $this->hasMany('App\Photo', 'photo_id');
    }
}
