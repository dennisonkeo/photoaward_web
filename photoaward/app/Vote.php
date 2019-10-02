<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function user()
    {
        return $this->belongsToMany(User::class);
    }

    public function upload()
    {
        return $this->belongsToMany(Upload::class);
    }
}
