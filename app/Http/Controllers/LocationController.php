<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class LocationController extends Controller
{
    //
    public function index(){
        return view('admin.locations');
    }
    public function fetch(){
        $data=Location::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('name', function ($data) {
                return $data->name;
            })
            ->addColumn('image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/locations/'.$data->image)." class='img-fluid' width='100'>";
            })
            ->addColumn('location_image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/location-image/'.$data->location_image)." class='img-fluid' width='100'>";
            })
            ->addColumn('detail', function ($data) {
                return $data->detail;
            })
            ->addColumn('guide_title', function ($data) {
                return $data->guide_title;
            })
            ->addColumn('guide_detail', function ($data) {
                return $data->guide_detail;
            })
            ->addColumn('guide_description', function ($data) {
                return $data->guide_description;
            })
            ->addColumn('growth', function ($data) {
                return $data->growth;
            })
            ->addColumn('location', function ($data) {
                return $data->location;
            })
            ->addColumn('location_title', function ($data) {
                return $data->location_title;
            })
            ->addColumn('location_description', function ($data) {
                return $data->location_description;
            })
            ->addColumn('about_title', function ($data) {
                return $data->about_title;
            })
            ->addColumn('about_description', function ($data) {
                return $data->about_description;
            })
            ->addColumn('around_location', function ($data) {
                return $data->around_location;
            })
            ->addColumn('options', function ($data) {
                $action="<button type='button' title='Edit' class='btn edit btn-sm btn-success' data-toggle='modal' data-id='" . $data->id . "'><i class='fa fa-edit'></i></button>";
                $action.="<button type='button' title='Delete' class='btn delete btn-sm btn-danger' data-id='" . $data->id . "'><i class='fa fa-trash'></i></button>";
                return $action;
            })
            ->rawColumns(['options','image','location_image','growth'])
            ->make(true);

    }
    public function store(Request $request){
        $this->validate(\request(),[
            'name' =>'required',
            'detail' =>'required',
        ],[
            'name.required'=>'Name field is required * ',
            'detail.required'=>'Detail field is required * ',
        ]);
        if ($request->id==0){
            $data = new Location();
            $message='Added successfully!';
            $this->validate(\request(),[
                'image' =>'required',
            ],[
                'image.required'=>'Image field is required * ',
            ]);
            $attachment = time() . $request->image->getClientOriginalName();
            Storage::disk('local')->put('/public/locations/' . $attachment, File::get($request->image));
            $data->image = $attachment;


        }else{
            $data =Location::find($request->id);
            $message='Updated successfully!';
        }
        $data->name = $request->name;
        $data->detail = $request->detail;
        $data->guide_title = $request->guide_title;
        $data->guide_detail = $request->guide_detail;
        $data->guide_description = $request->guide_description;
        $data->growth = $request->growth;
        $data->location = $request->location;
        $data->location_title = $request->location_title;
        $data->location_description = $request->location_description;
        $data->about_title = $request->about_title;
        $data->about_description = $request->about_description;
        $data->around_location = $request->around_location;
        if ($request->location_image){
            $attachment = time() . $request->location_image->getClientOriginalName();
            Storage::disk('local')->put('/public/location-image/' . $attachment, File::get($request->location_image));
            $data->location_image = $attachment;
        }
        if ($request->image){
            $attachment = time() . $request->image->getClientOriginalName();
            Storage::disk('local')->put('/public/locations/' . $attachment, File::get($request->image));
            $data->image = $attachment;
        }


        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=Location::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        Location::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}