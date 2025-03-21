<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class TagController extends Controller
{
    public function index(){
        $this->authorize('aspv');
        $title = 'Delete Tag!';
        $text = 'Are you sure you want to delete this data?';
        confirmDelete($title, $text);
        $tag = Tag::all();
        return view('tabletag.tag', compact('tag'));
    }

    public function createtag(){
        $this->authorize('aspv');
        return view('tabletag.createtag');
    }

    public function edittag($id){
        $this->authorize('aspv');
        $data = Tag::find($id);
        return view('tabletag.edittag', compact('data'));
    }

    public function store(Request $request){
        $this->authorize('aspv');
        $tag = new Tag;
        $request->validate([
            'name'=>'max:255'
        ]);
        $tag->name = $request->input('name');
        $tag->save();
        Alert::success('Successfully Added Data!');
        return redirect('/tag'); 
    }

    public function updatetag(Request $request,$id){
        $this->authorize('aspv');
        $data = Tag::find($id);
        $request->validate([
            'name'=>'max:255'
        ]);
        $data->update([
            'name'=>$request->input('name')
        ]);
        Alert::success('Successfully Edit Data!');
        return redirect('/tag');
    }

    public function delete($id){
        $this->authorize('aspv');
        $data = Tag::find($id);
        $data->delete();
        Alert::success('Successfully Delete Data!');
        return redirect('/tag');
    }
}
