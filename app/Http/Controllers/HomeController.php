<?php

namespace App\Http\Controllers;

use App\Models\UpdateSystem;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(){
        // Alert::question('ini adalah tes alert');
        $urgent = \App\Models\Request::where('status_id',1)->latest()
        ->take(5)->get();
        $open = \App\Models\Request::where('status_id', 2)->latest()
        ->take(5)->get();
        $progress = \App\Models\Request::where('status_id', 3)->latest()
        ->take(5)->get();
        $closed = \App\Models\Request::where('status_id', 4)->latest()
        ->take(5)->get();
        $us = UpdateSystem::latest()->take(4)->get();

        return view('dashboard', compact('urgent', 'open', 'progress', 'closed', 'us'));
    }

    public function activitylog(){
        return view('activitylog');
    }

    public function morerq($id){
        $data = \App\Models\Request::where('status_id', $id)->get();
        $dataid = $id;
        return view('tablerq.mrq',compact('data','dataid'));
    }
}
