<?php

namespace App\Http\Controllers;

use App\Repository\ArticleRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(){
        $artikel = ArticleRepository::latest(3);
        return view('pages.public.home', compact('artikel'));
    }
}
