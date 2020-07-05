<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Article;
use App\BerkasHukum;
use App\Galeri;
use App\Helpers\Number;
use App\Kunjungan;
use App\Repository\ArticleRepository;
use App\Repository\KunjunganRepository;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        $artikel = ArticleRepository::latest(2, false);
        $total_artikel = Number::short(Article::count(), 0);
        $total_galeri = Number::short(Galeri::count(), 0);
        $total_berkas = Number::short(BerkasHukum::count(), 0);
        $total_kunjungan = Number::short(Kunjungan::count(), 0);

        $bulan_ini = KunjunganRepository::month()->count();
        $bulan_lalu = KunjunganRepository::lastMonth()->count();
        $perbandingan_bulan_lalu = Number::short($bulan_lalu - $bulan_ini, 0);
        $total_kunjungan_bulan_ini = Number::short($bulan_ini, 0);
        $total_kunjungan_bulan_lalu = Number::short($bulan_lalu, 0);
        return view('pages.admin.index', compact(
            'artikel', 
            'total_artikel', 
            'total_galeri', 
            'total_berkas', 
            'total_kunjungan', 
            'total_kunjungan_bulan_ini',
            'perbandingan_bulan_lalu'
        ));
    }
    
}
