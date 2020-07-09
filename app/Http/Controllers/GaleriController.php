<?php

namespace App\Http\Controllers;

use App\Galeri;
use App\Repository\AlbumRepository;
use App\Repository\GaleriRepository;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(Request $request){
        $album = AlbumRepository::all($request);
        $galeri_pinned = GaleriRepository::pinned()->first();
        return view('pages.public.galeri', compact('album', 'galeri_pinned'))
            ->with('title', 'Galeri');
    }
}
