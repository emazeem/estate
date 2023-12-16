<?php

namespace App\Http\Controllers;

use App\Models\Guide;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class GuideController extends Controller
{
    //
    public function index(){
        return view('admin.guides');
    }
    public function fetch(){
        $data=Guide::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('title', function ($data) {
                return $data->title;
            })
            ->addColumn('title', function ($data) {
                return $data->title;
            })
            ->addColumn('detail', function ($data) {
                return $data->detail;
            })
            ->addColumn('description', function ($data) {
                return $data->description;
            })
            
            
            ->addColumn('image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/guide/'.$data->image)." class='img-fluid' width='100'>";
            })
            ->addColumn('options', function ($data) {
                $action="<button type='button' title='Edit' class='btn edit btn-sm btn-success' data-toggle='modal' data-id='" . $data->id . "'><i class='fa fa-edit'></i></button>";
                $action.="<button type='button' title='Delete' class='btn delete btn-sm btn-danger' data-id='" . $data->id . "'><i class='fa fa-trash'></i></button>";
                return $action;
            })
            ->rawColumns(['options','image','description'])
            ->make(true);

    }
    public function store(Request $request){
        $this->validate(\request(),[
            'title' =>'required',
            'detail' =>'required',
            'description' =>'required',
        ],[
            'title.required'=>'Title field is required * ',
            'detail.required'=>'Detail field is required * ',
            'description.required'=>'Description field is required * ',
        ]);
        if ($request->id==0){
            $this->validate(\request(),[
                'image' =>'required',
            ],[
                'image.required'=>'Image field is required * ',
            ]);
            $data = new Guide();
            $message='Added successfully!';
            $attachment = time() . $request->image->getClientOriginalName();
            Storage::disk('local')->put('/public/guide/' . $attachment, File::get($request->image));
            $data->image = $attachment;
        }else{
            $data =Guide::find($request->id);
            $message='Updated successfully!';
            if ($request->image){
                $attachment = time() . $request->image->getClientOriginalName();
                Storage::disk('local')->put('/public/guide/' . $attachment, File::get($request->image));
                $data->image = $attachment;
            }
        }
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->description = $request->description;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=Guide::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        Guide::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
