<?php

namespace App\Http\Controllers\Api;

use App\BerkasHukum;
use App\Http\Controllers\Controller;
use App\Http\Resources\Debug;
use App\Repository\BahanHukumRepository;
use App\Repository\BerkasRepository;
use Illuminate\Http\Request;

class BahanHukumController extends Controller{
    public function index(Request $request){
        $artikel = BahanHukumRepository::filter($request)->paginate(10);
        return $artikel;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        $data = $request->validate([
            'judul' => 'required',
            'berkas' => 'required|file|max:2048',
            'keterangan' => 'required',
        ]);

        $data = collect($data);
        $berkas = BerkasRepository::insert($request->berkas, []);
        $berkas_hukum = BerkasHukum::create($data->only(['judul', 'keterangan'])->all());
        if(!$berkas_hukum) $berkas->delete();
        else $berkas_hukum->berkas()->save($berkas);
        return $berkas_hukum;
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
    public function edit($id){
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
            'judul' => 'required',
            'berkas' => 'file|max:2048',
            'keterangan' => 'required',
        ]);

        $data = collect($data);
        $berkas = null;

        $berkas_hukum = BerkasHukum::find($id);
        $status = $berkas_hukum->update($data->only(['judul', 'keterangan'])->all());

        if($request->has('berkas')){
            $berkas = BerkasRepository::removeAndInsert($berkas_hukum->berkas, $request->berkas, []);
            $berkas_hukum->berkas()->save($berkas);
        }

        return $berkas_hukum;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        
    }
}
