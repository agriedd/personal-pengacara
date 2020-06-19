<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleHistory extends Model
{
    protected $appends = ['description', 'status'];
    public function article(){
        return $this->belongsTo(Article::class, 'id_article', 'id');
    }
    
    public function getDescriptionAttribute(){
        return substr(strip_tags($this->body), 0, 250);
    }
    public function getStatusAttribute(){
        return !!$this->published_at;
    }
}
