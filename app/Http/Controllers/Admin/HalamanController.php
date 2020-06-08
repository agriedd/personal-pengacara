<?php

namespace App\Http\Controllers\Admin;

use App\Halaman;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function index(){
        $halaman = Halaman::all();
        return view('pages.admin.halaman.index', compact('halaman'));
    }
}
