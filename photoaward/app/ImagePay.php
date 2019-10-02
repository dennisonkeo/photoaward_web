<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImagePay extends Model
{
    public function uploads()
    {
        return $this->hasMany(Upload::class);
    }

    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
