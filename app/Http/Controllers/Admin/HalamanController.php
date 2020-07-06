<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\HalamanRepository;
use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request){
        $halaman = HalamanRepository::all($request);
        return view('pages.admin.halaman.index', compact('halaman'));
    }
}
