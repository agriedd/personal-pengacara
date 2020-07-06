<?php

namespace App\Repository;

use App\Album;

class AlbumRepository{

    public static function orderWhitelist(){
        return collect([ 'created_at', 'id', 'galeri', 'nama' ]);
    }

    public static function all($request){
        return Album::all();
    }
    public static function filter($request){
        $query = Album::when($request->has("search"), function($q)use($request){
            return $q->where(function($q)use($request){
                $q->whereHas('galeri', function($q)use($request){
                    return $q
                        ->where('judul', 'like', "%{$request->search}%");
                });
                return $q
                    ->orWhere('nama', 'like', "%{$request->search}%")
                    ->orWhere('keterangan', 'like', "%{$request->search}%")
                    ->orWhere('location', 'like', "%{$request->search}%");
            });
        })
        ->when($request->filled("order") && self::orderWhitelist()->contains($request->order), function($q)use($request){
            if($request->order != 'galeri')
                return $q->orderBy(
                    $request->order,
                    $request->has("asc") && $request->asc == "true" ? "ASC" : "DESC"
                );
            return $q->withCount('galeri')->orderBy(
                'galeri_count',
                $request->has("asc") && $request->asc == "true" ? "ASC" : "DESC"
            );
        })
        ->when($request->filled("empty") && $request->empty == "false", function($q)use($request){
            return $q->has('galeri');
        });
        return $query;
    }
}
