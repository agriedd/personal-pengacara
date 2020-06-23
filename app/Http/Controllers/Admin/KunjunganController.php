<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Kunjungan;
use App\Repository\KunjunganRepository;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KunjunganController extends Controller{
    public function index(){
        $total_kunjungan = number_format(Kunjungan::count());
        $total_kunjungan_bulan_lalu = number_format(KunjunganRepository::lastMonth()->count());
        $total_kunjungan_bulan_ini = number_format(KunjunganRepository::month()->count());
        $total_kunjungan_hari_ini = number_format(KunjunganRepository::today()->count());
        return view('pages.admin.kunjungan.index', compact('total_kunjungan', 'total_kunjungan_bulan_lalu', 'total_kunjungan_bulan_ini', 'total_kunjungan_hari_ini'));
    }
}
