<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    public function User()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function Categorie()
    {
        return $this->belongsTo('App\Models\Categorie');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function Image()
    {
        return $this->morphOne('App\Models\Image','imageable');
    }
}
