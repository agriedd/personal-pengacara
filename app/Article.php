<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    public function createdBy(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
}
