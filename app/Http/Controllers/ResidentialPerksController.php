<?php

namespace App\Http\Controllers;

use App\Models\ResidentialDev;
use App\Models\ResidentialPerks;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ResidentialPerksController extends Controller
{
    //
    public function index(){
        $res=ResidentialDev::all();
        return view('admin.residential_perks',compact('res'));
    }
    public function fetch(){
        $data=ResidentialPerks::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('name', function ($data) {
                return $data->name;
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
            'name' =>'required',
            'detail' =>'required',
        ],[
            'name.required'=>'Name field is required * ',
            'detail.required'=>'Detail field is required * ',
        ]);
        if ($request->id==0){

            $data = new ResidentialPerks();
            $message='Added successfully!';
        }else{
            $data =ResidentialPerks::find($request->id);
            $message='Updated successfully!';
        }
        $data->name = $request->name;
        $data->detail = $request->detail;
        $data->residential_id = $request->residential;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=ResidentialPerks::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        ResidentialPerks::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
