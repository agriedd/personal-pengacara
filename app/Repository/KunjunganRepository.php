<?php

namespace App\Repository;

use App\Kunjungan;

class KunjunganRepository{
    public static function store($request){
        return Kunjungan::create($request->only([ "ip_address" ]));
    }
}
