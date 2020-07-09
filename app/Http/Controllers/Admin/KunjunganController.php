<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Number;
use App\Http\Controllers\Controller;
use App\Kunjungan;
use App\Repository\KunjunganRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KunjunganController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $total_kunjungan = Number::short(Kunjungan::count(), 1);
        $total_kunjungan_bulan_lalu = Number::short(KunjunganRepository::lastMonth()->count(), 1);
        $total_kunjungan_bulan_ini = Number::short(KunjunganRepository::month()->count(), 1);
        $total_kunjungan_hari_ini = Number::short(KunjunganRepository::today()->count(), 1);
        return view('pages.admin.kunjungan.index', compact('total_kunjungan', 'total_kunjungan_bulan_lalu', 'total_kunjungan_bulan_ini', 'total_kunjungan_hari_ini'))
        ->with('title', 'Total Kunjungan | Panel Admin');
    }
}
