<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\WhyBuyLocation;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class WhyBuyLocationController extends Controller
{
    //
    public function index(){
        $locs=Location::all();
        return view('admin.why_buy',compact('locs'));
    }
    public function fetch(){
        $data=WhyBuyLocation::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('title', function ($data) {
                return $data->title;
            })
            ->addColumn('value', function ($data) {
                return $data->value;
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
            'value' =>'required',
        ],[
            'title.required'=>'Title field is required * ',
            'value.required'=>'Value field is required * ',
        ]);
        if ($request->id==0){
            $data = new WhyBuyLocation();
            $message='Added successfully!';
        }else{
            $data =WhyBuyLocation::find($request->id);
            $message='Updated successfully!';
        }
        $data->title = $request->title;
        $data->value = $request->value;
        $data->location_id = $request->location_id;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=WhyBuyLocation::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        WhyBuyLocation::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
