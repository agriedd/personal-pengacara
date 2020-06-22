<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model{
    protected $table = 'galeri';
    protected $guarded = [];
    protected $with = [ 'album', 'gambar' ];
    protected $casts = [ 'created_at' => 'datetime:d-M-Y H:i:s' ];

    public function album(){
        return $this->belongsTo(Album::class, 'id_album', 'id');
    }
    public function gambar(){
        return $this->morphOne(Gambar::class, 'gambarable');
    }
}
