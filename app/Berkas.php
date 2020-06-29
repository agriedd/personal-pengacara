<?php

namespace App;

use App\Casts\File;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model{
    protected $guarded = [];
    protected $casts = [
        'src' => File::class  
    ];
    protected $appends = ['name'];

    public function berkasable(){
        return $this->morphTo();
    }

    public function getNameAttribute(){
        return preg_replace("/(.*\/)(.*)$/im", "$2", $this->original['src']);
    }
}
