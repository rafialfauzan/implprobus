<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        $this->authorize('aspv');
        $client = Outlet::all();
        return view('tableclient.client', compact('client'));
    }

    public function createclient(){
        $this->authorize('aspv');
        return view('tableclient.createclient');
    }
}
