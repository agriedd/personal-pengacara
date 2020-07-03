<?php

namespace App;

use App\Casts\Number;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';
    protected $appends = ['info_url', 'info_url_public', 'info_url_admin', 'created_at_diff', 'rating', 'views_int'];
    protected $with = ['info', 'cover', 'created_by'];
    protected $casts = ['created_at' => 'datetime:d-M-Y H:i:s', 'views' => Number::class];
    protected $guarded = [];

    public function created_by(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }

    public function info(){
        return $this->hasOne(ArticleHistory::class, 'id_article', 'id')->latest();
    }
    public function infopublikasi(){
        return $this->hasOne(ArticleHistory::class, 'id_article', 'id')->latest()->limit(1)->whereNotNull('published_at');
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
    public function getInfoUrlPublicAttribute(){
        return route('artikel', ['id' => $this->id, 'slug' => $this->slug]);
    }
    public function getInfoUrlAdminAttribute(){
        return route('admin.artikel.show', $this->id);
    }
    public function getCreatedAtDiffAttribute(){
        return $this->created_at->diffForHumans();
    }
    public function getRatingAttribute(){
        return $this->vote_up - $this->vote_down;
    }
    public function getViewsIntAttribute(){
        return $this->original['views'];
    }

    public function scopePublished($query){
        return $query->whereHas('info', function($q){
            return $q
                ->whereLatestPublished((new ArticleHistory())->getTable(), 'id_article')
                ->whereNotNull("published_at");
        });
    }
}
