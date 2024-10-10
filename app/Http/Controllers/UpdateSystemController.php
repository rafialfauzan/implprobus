<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpdateSystemController extends Controller
{
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
