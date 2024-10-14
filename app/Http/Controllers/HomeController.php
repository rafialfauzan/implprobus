<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(){
        // Alert::question('ini adalah tes alert');
        $urgent = \App\Models\Request::where('status_id',1)->get();
        $open = \App\Models\Request::where('status_id', 2)->get();
        $progress = \App\Models\Request::where('status_id', 3)->get();
        $closed = \App\Models\Request::where('status_id', 4)->get();

        return view('dashboard', compact('urgent', 'open', 'progress', 'closed'));
    }

    public function activitylog(){
        return view('activitylog');
    }
}
