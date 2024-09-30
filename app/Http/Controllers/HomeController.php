<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function detailrequest(){
        return view('detailrequest');
    }

    public function detailus(){
        return view('detailus');
    }

    public function mrq(){
        return view('mrq');
    }

    public function mus(){
        return view('mus');
    }
}
