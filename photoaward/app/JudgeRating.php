<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JudgeRating extends Model
{
    public function user()
     {
        return $this->belongsTo(User::class);
     }

     public function upload()
     {
        return $this->belongsTo(Upload::class);
     }

     public function rating_scale()
     {
        return $this->belongsTo(RatingScale::class);
     }
}
