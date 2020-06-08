<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Halaman extends Model
{
    protected $table = 'halaman';

    public function admin(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
}
