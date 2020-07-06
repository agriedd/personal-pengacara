<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    //
    public function index(Request $request)
    {
        $users = User::all();
        return view('pages.admin.user.index', compact('users'));
    }
}
