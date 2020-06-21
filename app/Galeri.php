<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model{
    protected $table = 'galeri';
    protected $guarded = [];
    protected $with = [ 'album', 'gambar' ];

    public function album(){
        return $this->belongsTo(Album::class, 'id_album', 'id');
    }
    public function gambar(){
        return $this->morphOne(Gambar::class, 'gambarable');
    }
}
