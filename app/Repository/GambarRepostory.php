<?php

namespace App\Repository;

use App\Gambar;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic;
use Illuminate\Support\Str;

class GambarRepostory{
    public static function insert($file, Array $data){
        
        $data = collect($data);

        $name = md5(Str::uuid());
        $name = "{$name}.{$file->extension()}";

        $imgSize = [ "lg" => 1024, "md" => 512, "sm" => 256, "xs" => 128 ];

        $data->put("src_ori", "img/{$name}");
        $data->put("alt", "Lorem, ipsum dolor.");

        Storage::makeDirectory("public/img");

        foreach($imgSize as $img => $size){
            $data->put("src_{$img}", "lg/{$name}");
            Storage::makeDirectory("public/{$img}");
        }

        $image = ImageManagerStatic::make($file->getRealPath());
        $image->save(storage_path("app/public/img/".$name));

        foreach($imgSize as $img => $size){
            $image->resize($size, null, function($constraint){
                $constraint->aspectRatio();
            });
            $image->save(storage_path("app/public/{$img}/".$name));
        }
        return Gambar::create($data->all());
    }
}
