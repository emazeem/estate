<?php

namespace App\Http\Controllers;

use App\Models\ConstructionUpdates;
use App\Models\ResidentialDev;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ConstructionUpdatesController extends Controller
{
    //
    public function index(){
        $devs=ResidentialDev::all();
        return view('admin.construction_updates',compact('devs'));
    }
    public function fetch(){
        $data=ConstructionUpdates::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('title', function ($data) {
                return $data->title;
            })
            ->addColumn('developments', function ($data) {
                $dev='';
                foreach (explode(',',$data->developments) as $value){
                    $dev=ResidentialDev::find($value)->title.' '.$dev;
                }
                return $dev;
            })
            ->addColumn('description', function ($data) {
                return $data->description;
            })
            ->addColumn('image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/ConstructionUpdates/'.$data->image)." class='img-fluid' width='100'>";
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
            'developments' =>'required',
            'description' =>'required',
        ],[
            'title.required'=>'Title field is required * ',
            'developments.required'=>'Developments field is required * ',
            'description.required'=>'Description field is required * ',
        ]);
        if ($request->id==0){
            $this->validate(\request(),[
                'image' =>'required',
            ],[
                'image.required'=>'Image field is required * ',
            ]);
            $data = new ConstructionUpdates();
            $message='Added successfully!';
            $attachment = time() . $request->image->getClientOriginalName();
            Storage::disk('local')->put('/public/ConstructionUpdates/' . $attachment, File::get($request->image));
            $data->image = $attachment;
        }else{
            $data =ConstructionUpdates::find($request->id);
            $message='Updated successfully!';
            if ($request->image){
                $attachment = time() . $request->image->getClientOriginalName();
                Storage::disk('local')->put('/public/ConstructionUpdates/' . $attachment, File::get($request->image));
                $data->image = $attachment;
            }
        }
        $data->title = $request->title;
        $data->developments = implode(',',$request->developments);
        $data->description = $request->description;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=ConstructionUpdates::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        ConstructionUpdates::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
