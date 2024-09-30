<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        
        return view('tableuser.user', compact('user'));
    }

    public function registeracc(){
        $tag = Tag::all();

        return view('tableuser.registeracc', compact('tag'));
    }

    public function editacc(){
        $tag = Tag::all();

        return view('tableuser.editacc', compact('tag'));
    }
}
