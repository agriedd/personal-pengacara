<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    public function createdBy(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }

    public function info(){
        return $this->hasOne(ArticleHistory::class, 'id_article', 'id')->latest();
    }
    public function histories(){
        return $this->hasMany(ArticleHistory::class, 'id_article', 'id');
    }
}
