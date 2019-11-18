<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    public function user()
    {
    	return $this->belongsTo(User::class);

    }

    public function cart()
    {
    	return $this->belongsTo(Cart::class);
    }
}
