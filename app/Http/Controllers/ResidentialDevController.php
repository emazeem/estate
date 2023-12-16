<?php

namespace App\Http\Controllers;

use App\Models\ResidentialDev;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ResidentialDevController extends Controller
{
    //
    public function index(){
        return view('admin.residential_dev');
    }
    public function fetch(){
        $data=ResidentialDev::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('title', function ($data) {
                return $data->title;
            })
            ->addColumn('description', function ($data) {
                return $data->description;
            })
            ->addColumn('overview', function ($data) {
                return $data->overview;
            })
            ->addColumn('location', function ($data) {
                return $data->location;
            })
            ->addColumn('apartments', function ($data) {
                return $data->apartments;
            })
            ->addColumn('tag', function ($data) {
                return $data->tag;
            })
            ->addColumn('bedrooms', function ($data) {
                return $data->bedrooms;
            })
            ->addColumn('prices', function ($data) {
                return $data->prices;
            })
            ->addColumn('location', function ($data) {
                return $data->location;
            })
            ->addColumn('image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/residential/'.$data->image)." class='img-fluid' width='100'>";
            })
            ->addColumn('options', function ($data) {
                $action="<button type='button' title='Edit' class='btn edit btn-sm btn-success' data-toggle='modal' data-id='" . $data->id . "'><i class='fa fa-edit'></i></button>";
                $action.="<button type='button' title='Delete' class='btn delete btn-sm btn-danger' data-id='" . $data->id . "'><i class='fa fa-trash'></i></button>";
                return $action;
            })
            ->rawColumns(['options','image','overview'])
            ->make(true);

    }
    public function store(Request $request){
        $this->validate(\request(),[
            'title' =>'required',
            'description' =>'required',
            'overview' =>'required',
            'location' =>'required',
            'apartments' =>'required',
            'tag' =>'required',
            'bedrooms' =>'required',
            'prices' =>'required',
        ],[
            'title.required'=>'Name field is required * ',
            'description.required'=>'Address field is required * ',
            'overview.required'=>'Details field is required * ',
            'location.required'=>'Details field is required * ',
            'apartments.required'=>'Details field is required * ',
            'tag.required'=>'Details field is required * ',
            'bedrooms.required'=>'Details field is required * ',
            'prices.required'=>'Details field is required * ',
        ]);
        if ($request->id==0){
            $data = new ResidentialDev();
            $message='Added successfully!';
            $this->validate(\request(),['image' =>'required',],['image.required'=>'Title field is required * ',]);
            $attachment = time() . $request->image->getClientOriginalName();
            Storage::disk('local')->put('/public/residential/' . $attachment, File::get($request->image));
            $data->image = $attachment;

        }else{
            $data =ResidentialDev::find($request->id);
            $message='Updated successfully!';
            if ($request->image){
                $attachment = time() . $request->image->getClientOriginalName();
                Storage::disk('local')->put('/public/residential/' . $attachment, File::get($request->image));
                $data->image = $attachment;
            }
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->overview = $request->overview;
        $data->location = $request->location;
        $data->apartments = $request->apartments;
        $data->tag = $request->tag;
        $data->bedrooms = $request->bedrooms;
        $data->prices = $request->prices;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=ResidentialDev::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        ResidentialDev::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
