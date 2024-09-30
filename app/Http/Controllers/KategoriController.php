<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('tablekategori.kategori', compact('kategori'));
    }

    public function createkategori(){
        return view('tablekategori.createkategori');
    }

    public function editkategori(){
        return view('tablekategori.editkategori');
    }
}
