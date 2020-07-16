<?php

namespace App\Repository;

use App\Article;
use App\ArticleHistory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleRepository{

    public static function orderWhitelist(){
        return collect([ 'created_at', 'id', 'views', 'vote_up', 'published_at', 'title' ]);
    }

    public static function all($request){
        return Article::with('info')->get();
    }
    public static function filterAuth($request){
        $query = Article::select([
            "article_histories.body",
            "article_histories.title",
            "article_histories.published_at",
            "article.*",
        ])
        ->leftJoin('article_histories', function($q){
            $q
                ->on("article_histories.id_article", '=', 'article.id')
                ->whereRaw("article_histories.id IN (
                    SELECT MAX(ah.id) from `article_histories` AS ah
                        JOIN `article` AS a ON ah.id_article = a.id 
                        GROUP BY a.id
                )");
        })
        ->when($request->has("search"), function($q)use($request){
            return $q->where(function($q)use($request){
                return $q
                    ->where('body', 'like', "%{$request->search}%")
                    ->orWhere('title', 'like', "%{$request->search}%");
            });
        })
        ->when(
            Auth::check() &&
            $request->filled("status") &&
            collect([ 'semua', 'publikasi', 'konsep' ])->contains($request->status), 
            function($q)use($request){
                switch ($request->status) {
                    case 'publikasi':
                        $q->whereNotNull('article_histories.published_at');
                    break;
                    case 'konsep':
                        $q->whereNull('article_histories.published_at');
                    break;
                    default:
                        // $q->unpublished();
                        break;
                }
            }, function($q)use($request){
                $q->published();
            })
        ->when($request->filled("order") && self::orderWhitelist()->contains($request->order), function($q)use($request){
            return $q->orderBy(
                $request->order,
                $request->has("asc") && $request->asc == "true" ? "ASC" : "DESC"
            );
        })
        ->orderBy('article_histories.created_at', 'desc');
        return $query;
    }
    public static function filter($request){
        $query = self::filterAuth($request);
        return $query;
    }
    public static function latest($n, $published = true, $except = null){
        return Article::when($published, function($q){
            return $q->published();
        })
        ->when(isset($except) && is_array($except), function($q){
            return $q->whereNotIn($except);
        })
        ->latest()->limit($n)->get();
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
