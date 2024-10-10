<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Tag;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    public function detailrequest(){
        return view('tablerq.detailrequest');
    }

    public function mrq(){
        return view('tablerq.mrq');
    }

    public function createrq(){
        $tag = Tag::all();
        $kategori = Kategori::all();
        return view('tablerq.createrq', compact('tag', 'kategori'));
    }

    public function editrq(){
        $tag = Tag::all();
        $kategori = Kategori::all();
        return view('tablerq.editrq', compact('tag','kategori'));
    }
}
