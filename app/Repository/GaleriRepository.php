<?php

namespace App\Repository;

use App\Galeri;

class GaleriRepository{
    public static function all($request){
        return Galeri::all();
    }
    public static function filter($request){
        $query = Galeri::when($request->has("search"), function($q)use($request){
            return $q
                ->where('judul', 'like', "%{$request->search}%");
            })
            ->when($request->filled("id_album"), function($q)use($request){
                return $q
                    ->where('id_album', $request->id_album);
            })
            ->latest();
        return $query;
    }
    public static function pinned(){
        return Galeri::limit(1)->get();
    }
}
