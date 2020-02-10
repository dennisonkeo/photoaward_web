<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RatingScale extends Model
{
    
     public function judge_rating()
     {
        return $this->hasMany(JudgeRating::class);
     }}
