<?php

namespace App\Repository;

use App\Halaman;

class HalamanRepository{

    public function all($request){
        return Halaman::with('info')->get();
    }
}
