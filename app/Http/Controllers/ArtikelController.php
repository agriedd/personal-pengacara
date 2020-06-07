<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(Request $request){
        return view('pages.public.articles');
    }
    public function artikel(Request $request, $slug){
        return view('pages.public.articles-info', compact('slug'));
    }
    public function artikelwithdate(Request $request, $date, $slug){
        return view('pages.public.articles-info', compact('slug'));
    }
}
