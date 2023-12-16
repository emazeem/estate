<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class TeamController extends Controller
{
    public function index(){
        return view('admin.team');
    }
    public function fetch(){
        $data=Team::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('name', function ($data) {
                return $data->name;
            })
            ->addColumn('designation', function ($data) {
                return $data->designation;
            })
            ->addColumn('category', function ($data) {
                return $data->category;
            })
            ->addColumn('biography', function ($data) {
                return $data->biography;
            })


            ->addColumn('image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/Team/'.$data->image)." class='img-fluid' width='100'>";
            })
            ->addColumn('options', function ($data) {
                $action="<button type='button' title='Edit' class='btn edit btn-sm btn-success' data-toggle='modal' data-id='" . $data->id . "'><i class='fa fa-edit'></i></button>";
                $action.="<button type='button' title='Delete' class='btn delete btn-sm btn-danger' data-id='" . $data->id . "'><i class='fa fa-trash'></i></button>";
                return $action;
            })
            ->rawColumns(['options','image','biography'])
            ->make(true);

    }
    public function store(Request $request){
        $this->validate(\request(),[
            'name' =>'required',
            'designation' =>'required',
            'category' =>'required',
            'biography' =>'required',
        ],[
            'name.required'=>'Name field is required * ',
            'designation.required'=>'Designation field is required * ',
            'category.required'=>'Category field is required * ',
            'biography.required'=>'Biography field is required * ',
        ]);
        if ($request->id==0){
            $this->validate(\request(),[
                'image' =>'required',
            ],[
                'image.required'=>'Title field is required * ',
            ]);
            $data = new Team();
            $message='Added successfully!';
            $attachment = time() . $request->image->getClientOriginalName();
            Storage::disk('local')->put('/public/Team/' . $attachment, File::get($request->image));
            $data->image = $attachment;
        }else{
            $data =Team::find($request->id);
            $message='Updated successfully!';
            if ($request->image){
                $attachment = time() . $request->image->getClientOriginalName();
                Storage::disk('local')->put('/public/Team/' . $attachment, File::get($request->image));
                $data->image = $attachment;
            }
        }
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->category = $request->category;
        $data->biography = $request->biography;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=Team::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        Team::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
