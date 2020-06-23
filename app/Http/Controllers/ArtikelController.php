<?php

namespace App\Http\Controllers;

use App\Article;
use App\Repository\ArticleRepository;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request){
        return view('pages.public.articles');
    }
    public function artikel(Request $request, $id = null, $slug){
        $artikel = null;
        if($id)
            $artikel = ArticleRepository::find($id, $slug);
        else
            $artikel = ArticleRepository::findSlug($slug);
        return view('pages.public.articles-info', compact('artikel'));
    }
    public function artikelwithdate(Request $request, $date, $slug){
        return view('pages.public.articles-info', compact('slug'));
    }
}
