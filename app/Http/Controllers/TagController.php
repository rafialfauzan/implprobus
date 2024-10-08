<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    public function index(){
        $tag = Tag::all();
        return view('tabletag.tag', compact('tag'));
    }

    public function createtag(){
        return view('tabletag.createtag');
    }

    public function edittag($id){
        $data = Tag::find($id);
        return view('tabletag.edittag', compact('data'));
    }

    public function store(Request $request){
        $tag = new Tag;
        $request->validate([
            'name'=>'max:255'
        ]);
        $tag->name = $request->input('name');
        $tag->save();
        Alert::success('Data berhasil di Tambahkan!');
        return redirect('/tag'); 
    }

    public function updatetag(Request $request,$id){
        $data = Tag::find($id);
        $request->validate([
            'name'=>'max:255'
        ]);
        $data->update([
            'name'=>$request->input('name')
        ]);
        Alert::success('Data berhasil di Edit!');
        return redirect('/tag');
    }

    public function delete($id){
        $data = Tag::find($id);
        $data->delete();
        Alert::success('Data Berhasil di Hapus!');
        return redirect('/tag');
    }
}
