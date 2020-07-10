<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BerkasHukum extends Model{
    protected $guarded = [];
    protected $with = ['berkas'];
    protected $casts = ['created_at' => 'datetime:d-M-Y H:i:s'];
    protected $appends = ['created_at_diff', 'url'];

    public function berkas(){
        return $this->morphOne(Berkas::class, 'berkasable');
    }

    public function getCreatedAtDiffAttribute(){
        if(!$this->created_at)
            return null;
        return $this->created_at->diffForHumans();
    }
    public function getUrlAttribute(){
        return route('bahan.hukum.download', [ 'bahan_hukum' => $this->id ]);
    }
}
