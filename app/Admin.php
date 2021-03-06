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
    protected $hidden = ["password"];
    protected $with = ["gambar", "info"];

    public function info(){
        return $this->belongsTo(User::class, "id_user", "id")->withDefault([
            "foto" => null,
            "info" => [],
        ]);
    }
    public function client(){
        return $this->hasMany(Client::class, "id_admin", "id");
    }
    public function artikel(){
        return $this->hasMany(Article::class, "id_admin", "id");
    }
    public function halaman(){
        return $this->hasMany(Halaman::class, 'id_admin', 'id');
    }
    public function gambar(){
        return $this->hasMany(Gambar::class, 'id_admin', 'id');
    }
    public function album(){
        return $this->hasMany(Album::class, 'id_admin', 'id');
    }
}
