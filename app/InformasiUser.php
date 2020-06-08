<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InformasiUser extends Model
{
    protected $table = "informasi_user";

    public function user()
    {
        return $this->belongsTo(User::class, "id_user", "id");
    }
}
