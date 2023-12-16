<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class NewsController extends Controller
{
    //
    public function index(){
        return view('admin.news');
    }
    public function fetch(){
        $data=News::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('title', function ($data) {
                return $data->title;
            })
            ->addColumn('read_time', function ($data) {
                return $data->read_time;
            })

            ->addColumn('description', function ($data) {
                return $data->description;
            })
            ->addColumn('image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/news/'.$data->image)." class='img-fluid' width='100'>";
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
            'description' =>'required',
            'read_time' =>'required',
        ],[
            'title.required'=>'Title field is required * ',
            'description.required'=>'Description field is required * ',
            'read_time.required'=>'Read Time field is required * ',
        ]);
        if ($request->id==0){
            $this->validate(\request(),[
                'image' =>'required',
            ],[
                'image.required'=>'Title field is required * ',
            ]);
            $data = new News();
            $message='Added successfully!';
            $attachment = time() . $request->image->getClientOriginalName();
            Storage::disk('local')->put('/public/news/' . $attachment, File::get($request->image));
            $data->image = $attachment;
        }else{
            $data =News::find($request->id);
            $message='Updated successfully!';
            if ($request->image){
                $attachment = time() . $request->image->getClientOriginalName();
                Storage::disk('local')->put('/public/news/' . $attachment, File::get($request->image));
                $data->image = $attachment;
            }
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->read_time = $request->read_time;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=News::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        News::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
