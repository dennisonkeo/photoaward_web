<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    
    public function category()
     {
        return $this->belongsTo(Category::class);
     }

     public function user()
     {
        return $this->belongsTo(User::class);
     }

     public function image_pay()
     {
        return $this->belongsTo(ImagePay::class);
     }

     public function votes()
     {
        return $this->hasMany(Vote::class);
     }

     public function carts()
     {
        return $this->hasMany(Cart::class);
     } 

     public function published()
     {
        return $this->hasMany(Published::class);
     }

}
