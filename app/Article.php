<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $appends = ['info_url', 'info_url_admin', 'created_at_diff', 'rating'];
    protected $with = ['info', 'cover', 'created_by'];
    protected $casts = ['created_at' => 'datetime:d-M-Y H:i:s'];
    protected $guarded = [];

    public function created_by(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }

    public function info(){
        return $this->hasOne(ArticleHistory::class, 'id_article', 'id')->latest();
    }
    public function histories(){
        return $this->hasMany(ArticleHistory::class, 'id_article', 'id');
    }
    public function cover(){
        return $this->morphOne(Gambar::class, 'gambarable')->latest();
    }

    public function getInfoUrlAttribute(){
        return route('artikel.show', $this->id);
    }
    public function getInfoUrlAdminAttribute(){
        return route('admin.artikel.show', $this->id);
    }
    public function getCreatedAtDiffAttribute(){
        return $this->created_at->diffForHumans();
    }
    public function getRatingAttribute(){
        return $this->rate_up - $this->rate_down;
    }
}
