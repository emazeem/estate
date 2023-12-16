<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\SpotlightLocation;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SpotlightLocationController extends Controller
{
    public function index(){
        $locs=Location::all();
        return view('admin.spotlight',compact('locs'));
    }
    public function fetch(){
        $data=SpotlightLocation::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('title', function ($data) {
                return $data->title;
            })
            ->addColumn('icon', function ($data) {
                return $data->icon;
            })
            ->addColumn('location', function ($data) {
                return $data->location->name;
            })
            ->addColumn('options', function ($data) {
                $action="<button type='button' title='Edit' class='btn edit btn-sm btn-success' data-toggle='modal' data-id='" . $data->id . "'><i class='fa fa-edit'></i></button>";
                $action.="<button type='button' title='Delete' class='btn delete btn-sm btn-danger' data-id='" . $data->id . "'><i class='fa fa-trash'></i></button>";
                return $action;
            })
            ->rawColumns(['options','icon'])
            ->make(true);

    }
    public function store(Request $request){
        $this->validate(\request(),[
            'title' =>'required',
            'icon' =>'required',
        ],[
            'title.required'=>'Title field is required * ',
            'icon.required'=>'Icon field is required * ',
        ]);
        if ($request->id==0){
            $data = new SpotlightLocation();
            $message='Added successfully!';
        }else{
            $data =SpotlightLocation::find($request->id);
            $message='Updated successfully!';
        }
        $data->title = $request->title;
        $data->icon = $request->icon;
        $data->location_id = $request->location_id;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=SpotlightLocation::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        SpotlightLocation::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
    //
}
