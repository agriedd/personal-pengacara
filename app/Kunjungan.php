<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $table = 'kunjungan';
    protected $guarded = [];
    protected $casts = ['created_at' => 'datetime:d-M-Y H:i:s'];
}
