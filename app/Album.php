<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model{
    protected $table = 'album';
    protected $appends = ['total_galeri'];

    public function createdBy(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
    public function galeri(){
        return $this->hasMany(Galeri::class, 'id_album', 'id');
    }
    public function getTotalGaleriAttribute(){
        return Galeri::where('id_album', $this->id)->count();
    }
}
