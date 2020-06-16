<?php

namespace App\Http\Controllers\Admin;

use App\Gambar;
use App\Http\Controllers\Controller;
use App\Repository\GambarRepostory;
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
        GambarRepostory::insert($request->foto, $data->except("foto")->all());

        return back();
    }
}