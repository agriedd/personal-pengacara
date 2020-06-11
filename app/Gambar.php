<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = 'gambar';

    public function gambarable(){
        return $this->morphTo();
    }

    public function createdBy(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
}
