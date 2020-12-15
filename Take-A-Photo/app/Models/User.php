<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $attributes = [
        'status' => false,
        'role' => 'user',
    ];

    public function Posts() 
    {
       return $this->hasMany('App\Models\Post');
    }
}
