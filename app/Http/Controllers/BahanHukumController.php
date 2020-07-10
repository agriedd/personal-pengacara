<?php

namespace App\Http\Controllers;

use App\BerkasHukum;
use App\Repository\BerkasRepository;
use Illuminate\Http\Request;

class BahanHukumController extends Controller
{
    public function download(Request $request, BerkasHukum $bahan_hukum){
        $berkas = $bahan_hukum->berkas;
        $berkas->increment('downloads');
        return redirect($berkas->src);
    }
}
