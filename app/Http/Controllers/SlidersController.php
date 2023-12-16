<?php

namespace App\Http\Controllers;

use App\Models\Sliders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class SlidersController extends Controller
{
    public function index(){
        return view('admin.sliders');
    }
    public function fetch(){
        $data=Sliders::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('title', function ($data) {
                return $data->title;
            })
            ->addColumn('link_name', function ($data) {
                return $data->link_name;
            })
            ->addColumn('link_url', function ($data) {
                return $data->link_url;
            })
            ->addColumn('image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/sliders/'.$data->image)." class='img-fluid' width='100'>";
            })
            ->addColumn('options', function ($data) {
                $action="<button type='button' title='Edit' class='btn edit btn-sm btn-success' data-toggle='modal' data-id='" . $data->id . "'><i class='fa fa-edit'></i></button>";
                $action.="<button type='button' title='Delete' class='btn delete btn-sm btn-danger' data-id='" . $data->id . "'><i class='fa fa-trash'></i></button>";
                return $action;
            })
            ->rawColumns(['options','image'])
            ->make(true);

    }
    public function store(Request $request){
        $this->validate(\request(),[
            'title' =>'required',
            'link_name' =>'required',
            'link_url' =>'required',
        ],[
            'title.required'=>'Title field is required * ',
            'link_name.required'=>'Link Name field is required * ',
            'link_url.required'=>'Link Url field is required * ',
        ]);
        if ($request->id==0){
            $this->validate(\request(),[
                'image' =>'required',
                ],[
                'image.required'=>'Title field is required * ',
            ]);
            $data = new Sliders();
            $message='Added successfully!';
            $attachment = time() . $request->image->getClientOriginalName();
            Storage::disk('local')->put('/public/sliders/' . $attachment, File::get($request->image));
            $data->image = $attachment;
        }else{
            $data =Sliders::find($request->id);
            $message='Updated successfully!';
            if ($request->image){
                $attachment = time() . $request->image->getClientOriginalName();
                Storage::disk('local')->put('/public/sliders/' . $attachment, File::get($request->image));
                $data->image = $attachment;
            }
        }
        $data->title = $request->title;
        $data->link_name = $request->link_name;
        $data->link_url = $request->link_url;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=Sliders::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        Sliders::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
