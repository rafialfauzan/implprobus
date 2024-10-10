<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(){
        // Alert::question('ini adalah tes alert');
        return view('dashboard');
    }

    public function activitylog(){
        return view('activitylog');
    }
}
