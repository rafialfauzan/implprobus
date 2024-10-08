<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StatusController extends Controller
{
    public function index(){
        $status = Status::all();
        return view('tablestatus.status', compact('status'));
    }

    public function createstatus(){
        return view('tablestatus.createstatus');
    }

    public function editstatus($id){
        $data = Status::find($id);
        return view('tablestatus.editstatus', compact('data'));
    }

    public function store(Request $request){
        $status = new Status;
        $request->validate([
            'name'=>'max:255'
        ]);
        $status->name = $request->input('name');
        $status->save();
        Alert::success('Data berhasil di Tambahkan!');
        return redirect('/status');
    }

    public function updatestatus(Request $request,$id){
        $data = Status::find($id);
        $request->validate([
            'name'=>'max:255'
        ]);
        $data->update([
            'name'=>$request->input('name')
        ]);
        Alert::success('Data berhasil di Edit!');
        return redirect('/status');
    }

    public function delete($id){
        $data = Status::find($id);
        $data->delete();
        Alert::success('Data Berhasil di Hapus!');
        return redirect('/status');
    }
}
