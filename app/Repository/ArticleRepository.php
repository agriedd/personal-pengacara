<?php

namespace App\Repository;

use App\Article;

class ArticleRepository{
    public static function all($request){
        return Article::with('info')->get();
    }
    public static function filterAuth($request){
        $query = Article::when($request->has("search"), function($q)use($request){
            $q->whereHas('info', function($q)use($request){
                return $q
                    ->where('body', 'like', "%{$request->search}%")
                    ->orWhere('title', 'like', "%{$request->search}%");
            });
        });
        return $query;
    }
    public static function filter($request){
        $query = self::filterAuth($request)->published();
        return $query;
    }
    public static function latest($n){
        return Article::published()->latest()->limit($n)->get();
    }
    public static function find($id, $slug = null){
        return Article::when(isset($slug), function($q) use($slug){
                return $q
                    ->where('slug', $slug);
            })
            ->published()
            ->findOrFail($id);
    }
    public static function findAuth($id, $slug = null){
        return Article::when(isset($slug), function($q) use($slug){
                return $q
                    ->where('slug', $slug);
            })
            ->findOrFail($id);
    }
    public static function findSlug($slug){
        return Article::published()
            ->where('slug', $slug)
            ->published()
            ->firstOrFail();
    }
    public static function incrementViews(Article $artikel){
        return $artikel->increment('views');
    }
}
