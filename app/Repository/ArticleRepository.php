<?php

namespace App\Repository;

use App\Article;

class ArticleRepository{
    public static function all($request){
        return Article::with('info')->get();
    }
    public static function filter($request){
        $query = Article::when($request->has("search"), function($q)use($request){
            $q->whereHas('info', function($q)use($request){
                return $q
                    ->where('body', 'like', "%{$request->search}%")
                    ->orWhere('title', 'like', "%{$request->search}%");
            });
        });
        return $query;
    }
}
