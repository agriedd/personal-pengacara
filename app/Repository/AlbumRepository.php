<?php

namespace App\Repository;

use App\Album;

class AlbumRepository{
    public static function all($request){
        return Album::all();
    }
    public static function filter($request){
        $query = Album::when($request->has("search"), function($q)use($request){
            $q->whereHas('galeri', function($q)use($request){
                return $q
                    ->where('judul', 'like', "%{$request->search}%");
            });
            return $q
                ->orWhere('nama', 'like', "%{$request->search}%")
                ->orWhere('keterangan', 'like', "%{$request->search}%")
                ->orWhere('location', 'like', "%{$request->search}%");
        });
        return $query;
    }
}
