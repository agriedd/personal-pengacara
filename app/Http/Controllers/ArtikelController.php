<?php

namespace App\Http\Controllers;

use App\Article;
use App\Repository\ArticleRepository;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request){
        $artikel = ArticleRepository::latest(10);
        return view('pages.public.articles', compact('artikel'))
            ->with('title', 'Artikel');
    }
    public function artikel(Request $request, $id = null, $slug){
        $artikel = null;
        if($id)
            $artikel = ArticleRepository::find($id, $slug);
        else
            $artikel = ArticleRepository::findSlug($slug);
        ArticleRepository::incrementViews($artikel);
        $daftar_artikel = ArticleRepository::latest(2);
        return view('pages.public.articles-info', compact('artikel', 'daftar_artikel'))    
            ->with('title', "Artikel | {$artikel->title}");
    }
    public function artikelwithdate(Request $request, $date, $slug){
        return view('pages.public.articles-info', compact('slug'))
            ->with('title', 'Artikel');
    }
}
