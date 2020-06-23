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
    public static function latest($n){
        return Article::published()->latest()->limit($n)->get();
    }
    public static function find($id, $slug = null){
        return Article::published()
            ->when(isset($slug), function($q) use($slug){
                return $q
                    ->where('slug', $slug);
            })
            ->findOrFail($id);
    }
    public static function findSlug($slug){
        return Article::published()
            ->where('slug', $slug)
            ->firstOrFail();
    }
}
