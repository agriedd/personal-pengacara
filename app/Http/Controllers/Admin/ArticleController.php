<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use App\Repository\ArticleRepository;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request){
        $articles = ArticleRepository::all($request);
        return view('pages.admin.artikel.index', compact('articles'));
    }
    public function show(Request $request, $id){
        $article = Article::findOrFail($id);
        return view('pages.admin.artikel.info', compact('article'));
    }
}
