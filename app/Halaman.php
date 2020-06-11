<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Halaman extends Model
{
    protected $table = 'halaman';

    public function admin(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
    public function history(){
        return $this->hasMany(HalamanHistory::class, 'id_halaman', 'id');
    }
    public function info(){
        return $this->hasOne(HalamanHistory::class, 'id_halaman', 'id')->latest();
    }
    public function thumbnail(){
        return $this->morphOne(Gambar::class, 'gambarable')->latest();
    }
}
