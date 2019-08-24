<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class like extends Model
{
    protected $fillable = ['user_id', 'post_id'];
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
