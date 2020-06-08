<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{

    use Notifiable;

    protected $table = "admin";
    protected $guarded = [];
    protected $redirectTo = "admin";

    public function client(){
        return $this->hasMany(Client::class, "id_admin", "id");
    }
    public function artikel(){
        return $this->hasMany(Article::class, "id_admin", "id");
    }
}
