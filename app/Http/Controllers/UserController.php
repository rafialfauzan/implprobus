<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $this->authorize('admin');
        $user = User::all();
        return view('tableuser.user', compact('user'));
    }

    public function registeracc(){
        $this->authorize('admin');
        $tag = Tag::all();
        return view('tableuser.registeracc', compact('tag'));
    }

    public function editacc(){
        $this->authorize('admin');
        $tag = Tag::all();
        return view('tableuser.editacc', compact('tag'));
    }

    public function editpass(){
        $this->authorize('admin');
        return view('tableuser.editpass');
    }
}
