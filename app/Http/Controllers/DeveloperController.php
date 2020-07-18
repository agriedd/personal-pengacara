<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index(){
        return "create by <a href='http://github.com/agriedd' target='_blank'>Edd.</a>";
    }
    public function cache(){
        \Artisan::call('view:cache');
        \Artisan::call('route:cache');
        \Artisan::call('optimize');
    }
    public function clearCache(){
        \Artisan::call('view:clear');
        \Artisan::call('route:clear');
        \Artisan::call('optimize:clear');
    }
}
