<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\ServiceSlider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class ServiceSliderController extends Controller
{
    //
    public function index(){
        $services=Service::all();
        return view('admin.service_slider',compact('services'));
    }
    public function fetch(){
        $data=ServiceSlider::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('service', function ($data) {
                return $data->service->name;
            })
            ->addColumn('image', function ($data) {
                return "<img src=".Storage::disk('local')->url('/service-slider/'.$data->image)." class='img-fluid' width='100'>";
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
            'service_id' =>'required',
        ],[
            'service_id.required'=>'Service field is required * ',
        ]);
        if ($request->id==0){
            $this->validate(\request(),[
                'image' =>'required',
            ],[
                'image.required'=>'Image field is required * ',
            ]);
            $data = new ServiceSlider();
            $message='Added successfully!';
            $attachment = time() . $request->image->getClientOriginalName();
            Storage::disk('local')->put('/public/service-slider/' . $attachment, File::get($request->image));
            $data->image = $attachment;
        }else{
            $data =ServiceSlider::find($request->id);
            $message='Updated successfully!';
            if ($request->image){
                $attachment = time() . $request->image->getClientOriginalName();
                Storage::disk('local')->put('/public/service-slider/' . $attachment, File::get($request->image));
                $data->image = $attachment;
            }
        }
        $data->service_id = $request->service_id;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=ServiceSlider::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        ServiceSlider::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
