<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('dashboard');
    }

    public function activitylog(){
        return view('activitylog');
    }

    
    public function detailrequest(){
        return view('tablerq.detailrequest');
    }

    public function mrq(){
        return view('tablerq.mrq');
    }

    public function createrq(){
        return view('tablerq.createrq');
    }

    public function editrq(){
        return view('tablerq.editrq');
    }


    public function detailus(){
        return view('tableus.detailus');
    }

    public function mus(){
        return view('tableus.mus');
    }

    public function createus(){
        return view('tableus.createus');
    }

    public function editus(){
        return view('tableus.editus');
    }
}
