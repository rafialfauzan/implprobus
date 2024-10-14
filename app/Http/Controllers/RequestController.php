<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Status;
use App\Models\Kategori;
use App\Models\DataImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

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
        $status = Status::all();
        return view('tablerq.createrq', compact('tag', 'kategori','status'));
    }

    public function editrq(){
        $tag = Tag::all();
        $kategori = Kategori::all();
        $status = Status::all();
        return view('tablerq.editrq', compact('tag','kategori', 'status'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'startdate' => 'required|date|before:enddate',
            'enddate' => 'required|date|after:startdate',
            'tag' => 'required',
            'category' => 'required',
            'outlet' => 'required',
            'status' => 'required',
            'images' => 'required|array|max:6',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:200'
        ]);

        $data = \App\Models\Request::create([
            'judul' => $request->title,
            'deskripsi' => $request->body,
            'start_date' => $request->startdate,
            'end_date' => $request->enddate,
            'kategori_id' => $request->category,
            'tag_id' => $request->tag,
            'user_id' => Auth::user()->id,
            'status_id' => $request->status,
            'outlet_id' => $request->outlet,
        ]);
        
        $imagedata = [];
        if($request->hasfile('images')){
            foreach ($request->file('images') as $image) {
                $extension = $image->getClientOriginalName();
                $filename = $extension;
                $image->move('img/',$filename);
                $imagedata[]=[
                    'request_id' => $data->id,
                    'image' => $filename
                ];
            }
        }
        DataImage::insert($imagedata);
        Alert::success('Create Request Success!');
        return redirect('/');
    }

    public function update(){

    }

    public function delete(){

    }
}
