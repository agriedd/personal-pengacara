<?php

namespace App\Repository;

use App\Kunjungan;

class KunjunganRepository{
    public static function store($data){
        $data = collect($data);

        return Kunjungan::create(
            $data->all()
        );
    }
}
