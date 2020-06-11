<?php

namespace App\Http\Controllers\Admin;

use App\Gambar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic;

class GambarController extends Controller
{
    public function index(){
        $listgambar = Gambar::with(['gambarable'])->get();
        // return response()->json($listgambar);
        return view('pages.admin.gambar.index', compact('listgambar'));
    }
    public function upload(Request $request){
        $data = $request->validate([
            'foto'  => 'required|file|max:2048|image'
        ]);
        $data = collect($data);
        
        $name = md5(Str::uuid());
        $name = "{$name}.{$request->foto->extension()}";
        
        $data->put("src_ori", "img/{$name}");
        $data->put("src_lg", "lg/{$name}");
        $data->put("src_md", "md/{$name}");
        $data->put("src_sm", "sm/{$name}");
        $data->put("src_xs", "xs/{$name}");
        $data->put("alt", "Lorem, ipsum dolor.");

        $image = ImageManagerStatic::make($request->foto->getRealPath());

        Storage::makeDirectory("public/img");
        Storage::makeDirectory("public/lg");
        Storage::makeDirectory("public/md");
        Storage::makeDirectory("public/sm");
        Storage::makeDirectory("public/xs");

        $image->save(storage_path("app/public/img/".$name));

        $image->resize(1024, null, function($constraint){
            $constraint->aspectRatio();
        });
        $image->save(storage_path("app/public/lg/".$name));

        $image->resize(512, null, function($constraint){
            $constraint->aspectRatio();
        });
        $image->save(storage_path("app/public/md/".$name));
        
        $image->resize(256, null, function($constraint){
            $constraint->aspectRatio();
        });
        $image->save(storage_path("app/public/sm/".$name));
        
        $image->resize(128, null, function($constraint){
            $constraint->aspectRatio();
        });
        $image->save(storage_path("app/public/xs/".$name));

        Gambar::create($data->except("foto")->all());

        return back();
    }
}
