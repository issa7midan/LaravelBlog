<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
class User extends Authenticatable
{
    use Notifiable, HasApiTokens;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'first_name','last_name', 'email', 'password',
    ];
    protected $casts = ["first_name"=>"string", "last_name"=>"string", "email"=>"string", "status"=>"integer"];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
         'password, remember_token',
    ];

    public function Post()
    {
        return $this->hasMany('App\Post','user_id');
    }
}
