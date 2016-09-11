<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function posts()
    {
        return $this->hasMany(\App\Post::class);
    }

    public function comments()
    {
        return $this->hasMany(\App\Comment::class);
    }
}
