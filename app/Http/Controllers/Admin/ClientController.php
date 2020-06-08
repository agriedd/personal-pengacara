<?php

namespace App\Http\Controllers\Admin;

use App\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(Request $request){
        $clients = Client::all();
        return view('pages.admin.client.index', compact('clients'));
    }
}
