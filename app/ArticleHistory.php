<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleHistory extends Model
{
    protected $appends = ['description', 'status', 'published_at_diff'];
    protected $guarded = [];
    protected $casts = ["published_at" => "datetime:d-M-Y H:i:s"];

    public function article(){
        return $this->belongsTo(Article::class, 'id_article', 'id');
    }
    
    public function getDescriptionAttribute(){
        $str = htmlspecialchars_decode(strip_tags($this->body), ENT_NOQUOTES);
        $str = preg_replace("[\&nbsp;]", " ", $str);
        return substr($str, 0, 100);
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
