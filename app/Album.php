<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model{
    protected $table = 'album';

    public function createdBy(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
    public function galeri(){
        return $this->hasMany(Galeri::class, 'id_album', 'id');
    }
}
