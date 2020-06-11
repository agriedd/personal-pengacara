<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model{
    protected $table = 'galeri';

    public function album(){
        return $this->belongsTo(Album::class, 'id_album', 'id');
    }
}
