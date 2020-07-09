<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BahanHukumController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        // $articles = ArticleRepository::all($request);
        return view('pages.admin.bahan_hukum.index')
        ->with('title', 'Bahan Hukum | Panel Admin');
    }
    public function show(Request $request, $id){
        // $article = Article::findOrFail($id);
        return view('pages.admin.bahan_hukum.info')
        ->with('title', 'Bahan Hukum | Panel Admin');
    }
}
