<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return view('tablemyreq.myreq');
    }

    public function myproc(){
        return view('tablemyreq.myproc');
    }

    public function myus(){
        return view('tablemyreq.myus');
    }
}
