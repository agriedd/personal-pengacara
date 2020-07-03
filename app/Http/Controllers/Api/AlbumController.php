<?php

namespace App\Http\Controllers\Api;

use App\Album;
use App\Http\Controllers\Controller;
use App\Repository\AlbumRepository;
use App\Repository\GambarRepostory;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index(Request $request){
        return AlbumRepository::filter($request)
            ->with(['galeri'])
            ->without(['galeri.album'])
            ->latest()
            ->paginate($request->limit ?? 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    }

    public function store(Request $request){
        $data = $request->validate([
            "nama" => 'required|min:4',
            'keterangan' => 'required',
        ]);
        $data = collect($data);
        $album = Album::create($data->only(['nama', 'keterangan'])->all());
        return $album;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        return Album::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $data = $request->validate([
            "nama" => 'required|min:4',
            'keterangan' => 'required',
        ]);
        $data = collect($data);
        $album = Album::find($id);
        $status = $album->update($data->only(['nama', 'keterangan'])->all());
        return [
            "status"=> $status,
            "message"=> $status ? "Berhasil menyimpan perubahan 😎" : "Gagal menyimpan perubahan"
        ];
    }

    public function destroy($id){
        //hapus file gambar
        //hapus gambar
        //hapus galeri
        //hapus album
        
        $album = Album::findOrFail($id);
        if($album->total_galeri){
            foreach($album->galeri as $galeri)
                GambarRepostory::destroy($galeri->gambar);
            $album->galeri()->delete();
        }
        
        $status = $album->delete();

        return [
            "status"    => $status,
            "message"   => $status ? "Berhasil menghapus data 😎" : "Gagal menghapus data"
        ];
    }
}
