<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleHistory extends Model
{
    protected $appends = ['description', 'status', 'published_at_diff'];
    protected $guarded = [];
    protected $casts = ["published_at" => "datetime:d-m-Y H:i:s"];

    public function article(){
        return $this->belongsTo(Article::class, 'id_article', 'id');
    }
    
    public function getDescriptionAttribute(){
        return substr(strip_tags($this->body), 0, 100);
    }
    public function getPublishedAtDiffAttribute(){
        if($this->published_at)
            return $this->published_at->diffForHumans();
        return null;
    }
    public function getStatusAttribute(){
        return !!$this->published_at;
    }
}
