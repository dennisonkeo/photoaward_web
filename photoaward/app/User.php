<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function uploads()
      {
        return $this->hasMany(Upload::class);
      }

    public function ratings()
    {
        return $this->hasMany(JudgeRating::class);
    }

    public function published()
    {
        return $this->hasMany(Published::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function imagePays()
    {
        return $this->hasMany(ImagePay::class);
    }

    public function purchases()
    {
        return $this->hasMany(Purchase::class);
    }


    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasAnyRole($roles)
        {
              return null !== $this->roles()->whereIn('name', $roles)->first();
        }
        /**
        * Check one role
        * @param string $role
        */
        public function hasRole($role)
        {
          return null !== $this->roles()->where('name', $role)->first();
        }

    public function AauthAcessToken()
    {
        return $this->hasMany(OauthAccessToken::class);
    }
}
