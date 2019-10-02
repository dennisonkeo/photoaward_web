<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }

    public function imagePays()
    {
        return $this->hasMany(ImagePay::class);
    }
}
