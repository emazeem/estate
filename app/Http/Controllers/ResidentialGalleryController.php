<?php

namespace App\Http\Controllers;

use App\Models\ResidentialDev;
use App\Models\ResidentialGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ResidentialGalleryController extends Controller
{
    //
    public function index(){
        $res=ResidentialDev::all();
        return view('admin.residential_gallery',compact('res'));
    }
    public function fetch(){
        $data=ResidentialGallery::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('title', function ($data) {
                return $data->title;
            })
            ->addColumn('residential', function ($data) {
                return $data->residential->title;
            })
            ->addColumn('image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/residential-gallery/'.$data->image)." class='img-fluid' width='100'>";
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
        ],[
            'title.required'=>'Title field is required * ',
        ]);
        if ($request->id==0){
            $this->validate(\request(),[
                'image' =>'required',
            ],[
                'image.required'=>'Title field is required * ',
            ]);
            $data = new ResidentialGallery();
            $message='Added successfully!';
            $attachment = time() . $request->image->getClientOriginalName();
            Storage::disk('local')->put('/public/residential-gallery/' . $attachment, File::get($request->image));
            $data->image = $attachment;
        }else{
            $data =ResidentialGallery::find($request->id);
            $message='Updated successfully!';
            if ($request->image){
                $attachment = time() . $request->image->getClientOriginalName();
                Storage::disk('local')->put('/public/residential-gallery/' . $attachment, File::get($request->image));
                $data->image = $attachment;
            }
        }
        $data->title = $request->title;
        $data->residential_id = $request->residential;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=ResidentialGallery::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        ResidentialGallery::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
