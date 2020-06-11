<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model{
    protected $table = 'album';

    public function createdBy(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
}
