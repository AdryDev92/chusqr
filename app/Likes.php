<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Likes extends Model
{
    protected $fillable = [
        'user_id','chusqer_id','likes'
    ];

    public function likes(){
        return $this->belongsToMany(User::class,'likes');
    }
}
