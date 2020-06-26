<?php

namespace App\Http\Controllers;

use App\Repository\AlbumRepository;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(Request $request){
        $album = AlbumRepository::all($request);
        return view('pages.public.galeri', compact('album'));
    }
}
