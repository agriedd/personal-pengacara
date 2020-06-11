<?php

namespace App;

use App\Casts\Gambar as CastsGambar;
use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
    protected $table = 'gambar';
    protected $guarded = [];
    protected $casts = [
        "src_ori" => CastsGambar::class,
        "src_lg" => CastsGambar::class,
        "src_md" => CastsGambar::class,
        "src_sm" => CastsGambar::class,
        "src_xs" => CastsGambar::class,
    ];
    public function gambarable(){
        return $this->morphTo();
    }
    public function createdBy(){
        return $this->belongsTo(Admin::class, 'id_admin', 'id');
    }
}
