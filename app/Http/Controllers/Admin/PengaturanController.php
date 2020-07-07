<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengaturanController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        // dd(Admin::first()->info);
        return view('pages.admin.pengaturan.index');
    }
}
