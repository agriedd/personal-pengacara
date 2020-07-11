<?php

namespace App;

use App\Casts\JenisKelamin;
use Illuminate\Database\Eloquent\Model;

class InformasiUser extends Model
{
    protected $table = "informasi_user";
    protected $guarded = [];
    protected $casts = [
        'jenis_kelamin' => JenisKelamin::class
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "id_user", "id");
    }
}
