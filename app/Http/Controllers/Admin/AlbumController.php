<?php

namespace App\Http\Controllers\Admin;

use App\Album;
use App\Http\Controllers\Controller;
use App\Repository\GambarRepostory;
use Illuminate\Http\Request;

class AlbumController extends Controller{
    public function index(){
        $albums = Album::all();
        return view('pages.admin.album.index', compact('albums'));
    }
    public function info(Request $request, Album $album){
        return view('pages.admin.album.info', compact('album'));
    }
    public function tambahGaleri(Request $request, Album $album){
        $data = $request->validate([
            'foto' => 'required|file|image|max:2048',
            'judul' => 'required',
            'keterangan'    => '',
        ]);
        $data = collect($data);
        $galeri = $album->galeri()->create(
            $data->only(['judul'])->all()
        );
        $gambar = GambarRepostory::insert($request->foto, $data->only(['keterangan'])->all() );
        $galeri->gambar()->save($gambar);
        return back();
    }
}
