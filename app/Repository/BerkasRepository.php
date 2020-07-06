<?php

namespace App\Repository;

use App\Berkas;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BerkasRepository{
    
    public static function insert($file, Array $data){
        
        $data = collect($data);

        $name = md5(Str::uuid());
        $name = "{$name}.{$file->extension()}";

        $data->put("src", "file/{$name}");
        $data->put("extension", $file->extension());
        $data->put("size", $file->getSize());

        Storage::makeDirectory("public/file");

        $file->storeAs("public/file", $name);
        return Berkas::create($data->all());
    }
    public static function destroy(Berkas $berkas = null){
        if($berkas){
            try{
                unlink(storage_path("app/public/{$berkas->src}"));
            } catch(\Exception $e){
                //do nothing
            }
            $berkas->delete();
        }
    }
    public static function removeAndInsert(Berkas $berkas = null, $file, Array $data){
        self::destroy($berkas);
        return self::insert($file, $data);
    }
}
