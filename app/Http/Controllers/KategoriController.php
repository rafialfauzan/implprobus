<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriController extends Controller
{
    public function index(){
        $kategori = Kategori::all();
        return view('tablekategori.kategori', compact('kategori'));
    }

    public function createkategori(){
        return view('tablekategori.createkategori');
    }

    public function editkategori($id){
        $data = Kategori::find($id);
        return view('tablekategori.editkategori', compact('data'));
    }

    public function store(Request $request){
        $kategori = new Kategori;
        $request->validate([
            'name'=>'max:255'
        ]);
        $kategori->name = $request->input('name');
        $kategori->save();
        Alert::success('Data berhasil di Tambahkan!');
        return redirect('/kategori'); 
    }

    public function updatekategori(Request $request,$id){
        $data = Kategori::find($id);
        $request->validate([
            'name'=>'max:255'
        ]);
        $data->update([
            'name'=>$request->input('name')
        ]);
        Alert::success('Data berhasil di Edit!');
        return redirect('/kategori');
    }

    public function delete($id){
        $data = Kategori::find($id);
        $data->delete();
        Alert::success('Data Berhasil di Hapus!');
        return redirect('/kategori');
    }
}
