<?php

namespace App\Http\Controllers;

use App\Models\Testimonials;
use Illuminate\Http\Request;
use PHPUnit\Util\Test;
use Yajra\DataTables\DataTables;

class TestimonialsController extends Controller
{
    public function index(){
        return view('admin.testimonials');
    }
    public function fetch(){
        $data=Testimonials::all();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('name', function ($data) {
                return $data->name;
            })
            ->addColumn('address', function ($data) {
                return $data->address;
            })
            ->addColumn('details', function ($data) {
                return $data->details;
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
            'name' =>'required',
            'address' =>'required',
            'details' =>'required',
        ],[
            'name.required'=>'Name field is required * ',
            'address.required'=>'Address field is required * ',
            'details.required'=>'Details field is required * ',
        ]);
        if ($request->id==0){
            $data = new Testimonials();
            $message='Added successfully!';
        }else{
            $data =Testimonials::find($request->id);
            $message='Updated successfully!';
        }
        $data->name = $request->name;
        $data->address = $request->address;
        $data->details = $request->details;
        $data->save();
        return response()->json(['success'=>$message]);
    }
    public function edit(Request $request){
        $update=Testimonials::find($request->id);
        return response()->json($update);
    }
    public function destroy(Request $request){
        Testimonials::find($request->id)->delete();
        return response()->json(['success'=>'Deleted successfully!']);
    }
}
