<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'user';
    protected $guarded = [];
    protected $with = [ "info", "foto" ];

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


    public function info(){
        return $this->hasOne(InformasiUser::class, "id_user", "id")->latest();
    }
    public function admin(){
        return $this->hasOne(Admin::class, "id_user", "id")->latest();
    }
    public function foto(){
        return $this->morphOne(Gambar::class, 'gambarable')->latest();
    }
}
