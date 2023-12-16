<?php

namespace App\Http\Controllers;

use App\Models\ResidentialDev;
use App\Models\ResidentialFeature;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ResidentialFeatureController extends Controller
{
    //
    public function index(){
        $res=ResidentialDev::all();
        return view('admin.residential_feature',compact('res'));
    }
    public function fetch(){
        $data=ResidentialFeature::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('icon', function ($data) {
                return $data->icon.' <span class="'.$data->icon.'"></span>';
            })
            ->addColumn('title', function ($data) {
                return $data->title;
            })
            ->addColumn('detail', function ($data) {
                return $data->detail;
            })
            ->addColumn('residential', function ($data) {
                return $data->residential->title;
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
            'icon' =>'required',
            'title' =>'required',
            'detail' =>'required',
        ],[
            'icon.required'=>'Icon field is required * ',
            'title.required'=>'Title field is required * ',
            'detail.required'=>'Detail field is required * ',
        ]);
        if ($request->id==0){

            $data = new ResidentialFeature();
            $message='Added successfully!';
        }else{
            $data =ResidentialFeature::find($request->id);
            $message='Updated successfully!';
        }
        $data->icon = $request->icon;
        $data->title = $request->title;
        $data->detail = $request->detail;
        $data->residential_id = $request->residential;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=ResidentialFeature::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        ResidentialFeature::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
