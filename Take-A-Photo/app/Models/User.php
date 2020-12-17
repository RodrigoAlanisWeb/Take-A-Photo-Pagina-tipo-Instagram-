<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;

    protected $attributes = [
        'status' => false,
        'role' => 'user',
    ];

    protected $fillable = [
        'name',
        'nick_name',
        'email',
        'password',
    ];

    public function Posts() 
    {
       return $this->hasMany('App\Models\Post');
    }

    // relacione polimorfica

    public function Image()
    {
        return $this->morphOne('App\Models\Image','imageable');
    }
}
