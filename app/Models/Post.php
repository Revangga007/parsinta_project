<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

    public function scopeLatestFirst()
    {
        return $this->latest()->first();
    }

    public function scopeLatestPost()
    {
        return $this->latest()->first();
    }


}
