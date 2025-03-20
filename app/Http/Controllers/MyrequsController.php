<?php

namespace App\Http\Controllers;

use App\Models\UpdateSystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyrequsController extends Controller
{
    public function index()
    {
        return view('tablemyrequs.myrequs');
    }

    public function myrequest(){
        $id = Auth::user()->id;
        $req = \App\Models\Request::where('user_id',$id)->latest()->get();
        return view('tablemyrequs.myrequest', compact('req'));
    }

    public function myupdatesystem(){
        $id = Auth::user()->id;
        $updt = UpdateSystem::where('user_id',$id)->latest()->get();
        return view('tablemyrequs.myupdatesystem', compact('updt'));
    }
}
