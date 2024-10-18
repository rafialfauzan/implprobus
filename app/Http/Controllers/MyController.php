<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyController extends Controller
{
    public function index(){
        $id = Auth::user()->tag_id;
        $urgent = \App\Models\Request::where('tag_id',$id)->where('status_id', 1)->get();
        $open = \App\Models\Request::where('tag_id',$id)->where('status_id', 2)->get();
        $progress = \App\Models\Request::where('tag_id',$id)->where('status_id', 3)->get();
        $closed = \App\Models\Request::where('tag_id',$id)->where('status_id', 4)->get();
        return view('tablemyreq.myreq', compact('urgent','open','progress','closed'));
    }

    public function myproc($id){
        $uid = Auth::user()->tag_id;
        $data = \App\Models\Request::where('status_id',$id)->where('tag_id',$uid)->get();
        $dataid = $id;
        return view('tablemyreq.myproc', compact('data', 'dataid'));
    }

    public function myus(){
        return view('tablemyreq.myus');
    }
}
