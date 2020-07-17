<?php

namespace App\Http\Controllers;

use App\Article;
use App\Repository\ArticleRepository;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request){
        $artikel_utama = ArticleRepository::latest(1)->first();
        $artikel = $artikel_utama ? ArticleRepository::latest(10, true, [$artikel_utama->id]) : [];
        return view('pages.public.articles', compact('artikel', 'artikel_utama'))
            ->with('title', 'Artikel');
    }
    public function artikel(Request $request, $id = null, $slug){
        $artikel = null;
        if($id)
            $artikel = ArticleRepository::find($id, $slug);
        else
            $artikel = ArticleRepository::findSlug($slug);
        ArticleRepository::incrementViews($artikel);
        $artikel_selanjutnya = ArticleRepository::latest(1, true, [ $artikel->id ])->first();
        $daftar_artikel = $artikel_selanjutnya ? ArticleRepository::latest(2, true, [ $artikel->id, $artikel_selanjutnya->id ]) : [];
        return view('pages.public.articles-info', compact('artikel', 'daftar_artikel', 'artikel_selanjutnya'))
            ->with('title', "Artikel | {$artikel->info->title}");
    }
    public function artikelwithdate(Request $request, $date, $slug){
        return view('pages.public.articles-info', compact('slug'))
            ->with('title', 'Artikel');
    }
}
