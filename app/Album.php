<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model{
    protected $table = 'album';
    protected $appends = ['total_galeri', 'created_at_diff', 'info_url_admin'];
    protected $with = ['created_by'];
    protected $casts = ['created_at' => 'datetime:d-M-Y H:i:s'];
    protected $guarded = [];

    public function created_by(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
    public function galeri(){
        return $this->hasMany(Galeri::class, 'id_album', 'id');
    }
    public function getTotalGaleriAttribute(){
        return Galeri::where('id_album', $this->id)->count();
    }
    public function getCreatedAtDiffAttribute(){
        return $this->created_at->diffForHumans();
    }
    public function getInfoUrlAdminAttribute(){
        return route('admin.album.info', $this->id);
    }
}
