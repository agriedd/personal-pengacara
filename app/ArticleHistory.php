<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleHistory extends Model
{
    public function article(){
        return $this->belongsTo(Article::class, 'id_article', 'id');
    }
}
