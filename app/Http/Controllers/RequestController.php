<?php

namespace App\Http\Controllers;

use App\Models\RequestLog;
use App\Models\Tag;
use App\Models\Outlet;
use App\Models\Status;
use App\Models\Kategori;
use App\Models\Komentar;
use App\Models\DataImage;
use App\Models\UpdateSystem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Notifications\RequestStatusChanged;

class RequestController extends Controller
{
    public function detailrequest($id){
        $title = 'Delete Comment!';
        $text = 'Are you sure you want to delete this comment?';
        confirmDelete($title, $text);
        $datarq = \App\Models\Request::find($id);
        $dataimg = DataImage::where('request_id', $id)->get();
        $komentar = Komentar::where('request_id', $id)->get();
        $dataus = UpdateSystem::where('request_id', $id)->get();
        $reqlog = RequestLog::where('request_id', $id)->first();
        return view('tablerq.detailrequest', compact('datarq', 'dataimg','komentar','dataus','reqlog'));
    }

    public function mrq(){
        return view('tablerq.mrq');
    }

    public function createrq(){
        $tag = Tag::all();
        $kategori = Kategori::all();
        $status = Status::all();
        $outlet = Outlet::all();
        return view('tablerq.createrq', compact('tag', 'kategori','status','outlet'));
    }

    public function editrq($id){
        $req = \App\Models\Request::find($id);
        $img = DataImage::where('request_id', $id)->get();
        $tag = Tag::all();
        $kategori = Kategori::all();
        $status = Status::all();
        $outlet = Outlet::all();
        return view('tablerq.editrq', compact('tag','kategori', 'status', 'req', 'img','outlet'));
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
            'images' => 'array|max:6',
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
        return redirect()->route('detailrequest', ['id' => $data->id]);
    }

    public function updaterq(Request $request,$id){
        $rq = \App\Models\Request::find($id);
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'startdate' => 'required|date|before:enddate',
            'enddate' => 'required|date|after:startdate',
            'tag' => 'required',
            'category' => 'required',
            'outlet' => 'required',
            'status' => 'required',
            'images' => 'array|max:6',
            'images.*' => 'image|mimes:jpg,jpeg,png|max:200'
        ]);

        $existingFile = DataImage::where('request_id', $id)->count();
        $maxImages = 6;
        $images = $request->file('images');
        if ($images != null){

            if ($existingFile + count($images) > $maxImages) {
                Alert::error('Image Limit Exceeded!', 'You can only upload a maximum of 6 images.');
                return redirect()->back();
            }
        }

        $rq->update([
            'judul' => $request->title,
            'deskripsi' => $request->body,
            'start_date' => $request->startdate,
            'end_date' => $request->enddate,
            'kategori_id' => $request->category,
            'tag_id' => $request->tag,
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
                    'request_id' => $id,
                    'image' => $filename
                ];
            }
        }
        DataImage::insert($imagedata);
        Alert::success('Request Successfully Edited!');
        return redirect()->route('detailrequest', ['id' => $id]);
    }

    public function deleteimg($img){
        $image = DataImage::find($img);
        $image->delete();
        Alert::success('Image Deleted!');
        return redirect()->back();
    }

    public function updatestatus($id,$stid){
        $reqlog = RequestLog::class;
        $data = \App\Models\Request::find($id);
        $data->update([
            'status_id' => $stid
        ]);
        $reqlog::create([
            'request_id' => $id,
            'status_id' => $stid,
            'user_id' => Auth::user()->id
        ]);
        $creator = $data->user;
        $creator->notify(new RequestStatusChanged($data));
        Alert::success('Status Changed!');
        return redirect()->back();
    }

    public function komentar(Request $request,$id){
        $request->validate([
            'comment' => 'required'
        ]);
        Komentar::create([
            'request_id' => $id,
            'body' => $request->comment,
            'user_id' => Auth::user()->id,
        ]);
        return redirect()->back();
    }

    public function deletekomen($id){
        $komen = Komentar::find($id);
        $komen->delete();
        Alert::success('Comment Deleted!');
        return redirect()->back();
    }

    public function delete($id){
        $data = \App\Models\Request::find($id);
        $data->delete();
        Alert::success('Request Deleted!');
        return redirect()->back();
    }
}
