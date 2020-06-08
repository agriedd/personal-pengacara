<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HalamanHistory extends Model
{
    public function halaman(){
        return $this->belongsTo(Halaman::class, 'id_halaman', 'id');
    }
}
