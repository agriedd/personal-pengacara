<?php

namespace App;

use App\Casts\File;
use App\Casts\Number;
use Illuminate\Database\Eloquent\Model;

class Berkas extends Model{
    protected $guarded = [];
    protected $casts = [
        'src' => File::class,
        'downloads' => Number::class,
    ];
    protected $appends = ['name'];

    public function berkasable(){
        return $this->morphTo();
    }

    public function getNameAttribute(){
        return preg_replace("/(.*\/)(.*)$/im", "$2", $this->original['src']);
    }
}
