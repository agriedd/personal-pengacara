<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $table = 'client';

    public function insertBy()
    {
        return $this->belongsTo(Admin::class, "id_admin", "id");
    }
}
