<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ServiceController extends Controller
{
    //
    public function index(){
        return view('admin.services');
    }
    public function fetch(){
        $data=Service::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('name', function ($data) {
                return $data->name;
            })
            ->addColumn('image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/services/'.$data->image)." class='img-fluid' width='100'>";
            })
            ->addColumn('slider_title', function ($data) {
                return $data->slider_title;
            })
            ->addColumn('slider_description', function ($data) {
                return $data->slider_description;
            })

            ->addColumn('title', function ($data) {
                return $data->title;
            })
            ->addColumn('description', function ($data) {
                return $data->description;
            })
            ->addColumn('key_points_title', function ($data) {
                return $data->key_points_title;
            })
            ->addColumn('key_points', function ($data) {
                return $data->key_points;
            })
            ->addColumn('key_points_image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/key-points/'.$data->key_points_image)." class='img-fluid' width='100'>";
            })
            ->addColumn('options', function ($data) {
                $action="<button type='button' title='Edit' class='btn edit btn-sm btn-success' data-toggle='modal' data-id='" . $data->id . "'><i class='fa fa-edit'></i></button>";
                $action.="<button type='button' title='Delete' class='btn delete btn-sm btn-danger' data-id='" . $data->id . "'><i class='fa fa-trash'></i></button>";
                return $action;
            })
            ->rawColumns(['options','image','key_points_image','description','key_points'])
            ->make(true);

    }
    public function store(Request $request){
        $this->validate(\request(),[
            'name' =>'required',
            'title' =>'required',
            'description' =>'required',
            'slider_title' =>'required',
            'slider_description' =>'required',
            'key_points_title' =>'required',
            'key_points' =>'required',
        ],[
            'name.required'=>'Name field is required * ',
            'title.required'=>'Title field is required * ',
            'description.required'=>'Description field is required * ',
            'slider_title.required'=>'Slider Title field is required * ',
            'slider_description.required'=>'Slider Description field is required * ',
            'key_points_title.required'=>'Key points title field is required * ',
            'key_points.required'=>'Key points title field is required * ',
        ]);
        if ($request->id==0){
            $data = new Service();
            $message='Added successfully!';
            $this->validate(\request(),[
                'image' =>'required',
                'key_points_image' =>'required',
            ],[
                'image.required'=>'Image field is required * ',
                'key_points_image.required'=>'Image field is required * ',
            ]);
            $attachment = time() . $request->image->getClientOriginalName();
            Storage::disk('local')->put('/public/services/' . $attachment, File::get($request->image));
            $data->image = $attachment;
            $attachment = time() . $request->key_points_image->getClientOriginalName();
            Storage::disk('local')->put('/public/key-points/' . $attachment, File::get($request->key_points_image));
            $data->key_points_image = $attachment;
        }else{
            $data =Service::find($request->id);
            $message='Updated successfully!';
            if ($request->image){
                $attachment = time() . $request->image->getClientOriginalName();
                Storage::disk('local')->put('/public/services/' . $attachment, File::get($request->image));
                $data->image = $attachment;
            }

            if ($request->image){
                $attachment = time() . $request->key_points_image->getClientOriginalName();
                Storage::disk('local')->put('/public/key-points/' . $attachment, File::get($request->key_points_image));
                $data->key_points_image = $attachment;

            }
        }
        $data->name = $request->name;
        $data->title = $request->title;
        $data->description = $request->description;
        $data->slider_title = $request->slider_title;
        $data->slider_description = $request->slider_description;
        $data->key_points_title = $request->key_points_title;
        $data->key_points = $request->key_points;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=Service::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        Service::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
