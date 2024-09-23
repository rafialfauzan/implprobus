<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        $tag = Tag::all();
        return view('tabletag.tag', compact('tag'));
    }

    public function createtag(){
        return view('tabletag.createtag');
    }
}
