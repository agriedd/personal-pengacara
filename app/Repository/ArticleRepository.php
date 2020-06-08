<?php

namespace App\Repository;

use App\Article;

class ArticleRepository{
    public static function all($request){
        return Article::with('info')->get();
    }
}
