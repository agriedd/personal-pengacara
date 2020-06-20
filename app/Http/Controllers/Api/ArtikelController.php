<?php

namespace App\Http\Controllers\Api;

use App\Admin;
use App\Article;
use App\Http\Controllers\Controller;
use App\Http\Resources\ArtikelResource;
use App\Repository\ArticleRepository;
use App\Repository\GambarRepostory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index(Request $request){
        $data = ArticleRepository::filter($request)->paginate(10);
        return new ArtikelResource($data);
    }
    public function create(){
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * @todo tambah keterangan cover
     * 
     */
    public function store(Request $request){
        $data = $request->validate([
            "cover" => 'required|file|max:2048|image',
            "judul" => 'required|min:4',
            "body"  => "required",
        ]);

        $data   = collect($data);
        $data->put("title", $data->get("judul"));
        $admin  = Admin::find(auth()->user()->id);

        $status = $request->get("status", 0);

        $artikel = $admin->artikel()->create([ "slug" => Str::slug($data->get("judul")) ]);
        
        if($status == 1){
            $data->put("published_at", now());
            $artikel_info = $artikel->histories()->create( $data->only(["title", "body", "published_at"])->all() );
        } else
            $artikel_info = $artikel->histories()->create( $data->only(["title", "body"])->all() );
        
        $cover = GambarRepostory::insert($request->cover, []);
        $artikel->cover()->save($cover);

        return $artikel;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            "cover" => 'file|max:2048|image',
            "judul" => 'required|min:4',
            "body"  => "required",
        ]);

        $data   = collect($data);
        $data->put("title", $data->get("judul"));
        $admin  = Admin::find(auth()->user()->id);

        $status = $request->get("status", 0);

        $artikel = Article::find($id);
        $artikel->update([ "slug" => Str::slug($data->get("judul")) ]);
        
        if($status == 1){
            $data->put("published_at", now());
            $artikel_info = $artikel->histories()->create( $data->only(["title", "body", "published_at"])->all() );
        } else
            $artikel_info = $artikel->histories()->create( $data->only(["title", "body"])->all() );
        
        if($request->has("cover")){
            $cover = GambarRepostory::removeAndInsert($artikel->cover, $request->cover, []);
            $artikel->cover()->save($cover);
        }

        return $artikel;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $artikel = Article::find($id);
        GambarRepostory::destroy( $artikel->cover );
        $artikel->delete();
        return [
            "status"=> true,
            "message"=> "Berhasil menghapus data 😎"
        ];
    }
}
