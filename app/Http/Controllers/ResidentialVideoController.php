<?php

namespace App\Http\Controllers;

use App\Models\ResidentialDev;
use App\Models\ResidentialVideo;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ResidentialVideoController extends Controller
{
    //
    public function index(){
        $res=ResidentialDev::all();
        return view('admin.residential_video',compact('res'));
    }
    public function fetch(){
        $data=ResidentialVideo::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('url', function ($data) {
                return $data->url;
            })
            ->addColumn('residential', function ($data) {
                return $data->residential->title;
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
            'url' =>'required',
        ],[
            'url.required'=>'URL field is required * ',
        ]);
        if ($request->id==0){

            $data = new ResidentialVideo();
            $message='Added successfully!';
        }else{
            $data =ResidentialVideo::find($request->id);
            $message='Updated successfully!';
        }
        $data->url = $request->url;
        $data->residential_id = $request->residential;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=ResidentialVideo::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        ResidentialVideo::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
