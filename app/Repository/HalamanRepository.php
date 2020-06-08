<?php

namespace App\Repository;

use App\Halaman;

class HalamanRepository{

    public static function all($request){
        return Halaman::with('info')->get();
    }
}
