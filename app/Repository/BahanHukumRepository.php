<?php

namespace App\Repository;

use App\BerkasHukum;

class BahanHukumRepository{
    public static function filter($request){
        $query = BerkasHukum::when($request->has("search"), function($q)use($request){
            return $q
                ->where('judul', 'like', "%{$request->search}%")
                ->orWhere('keterangan', 'like', "%{$request->search}%");
            });
        return $query;
    }
}
