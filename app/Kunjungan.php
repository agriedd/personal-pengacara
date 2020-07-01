<?php

namespace App;

use App\Casts\IpKunjungan;
use App\Casts\RefererKunjungan;
use App\Casts\UserAgentKunjungan;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    protected $table = 'kunjungan';
    protected $guarded = [];
    protected $casts = [
        'created_at'    => 'datetime:d-M-Y H:i:s', 
        'ip_address'    => IpKunjungan::class,
        'user_agent'    => UserAgentKunjungan::class,
        'uri'           => RefererKunjungan::class,
    ];
}
