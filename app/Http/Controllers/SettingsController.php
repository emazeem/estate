<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Cocur\Slugify\Slugify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Yajra\DataTables\DataTables;

class SettingsController extends Controller
{
    //
    public function contact(){
        $page='contact-us';
        return view('admin.contacts',compact('page'));
    }
    public function faqs(){
        $page='faqs';
        return view('admin.faqs',compact('page'));
    }

    public function home(){
        $page='home';
        return view('admin.home',compact('page'));
    }
    public function tac(){
        $page='terms-and-conditions';
        return view('admin.tac',compact('page'));
    }

    public function policy(){
        $page='policy';
        return view('admin.policy',compact('page'));
    }
    public function complaints(){
        $page='complaints';
        return view('admin.complaints',compact('page'));
    }
    public function footer(){
        $page='footer';
        return view('admin.footer',compact('page'));
    }



    public function fetch(Request $request){
        $data=Settings::where('page',$request->page)->get();
        return DataTables::of($data)
            ->addColumn('id', function ($data) {
                return $data->id;
            })
            ->addColumn('name', function ($data) {
                return $data->name;
            })
            ->addColumn('value', function ($data) {
                if ($data->type=='text'){
                    return $data->value;
                }else{
                    return "<img src=".Storage::disk('local')->url('/settings/'.$data->value)." class='img-fluid' width='200'>";
                }
            })
            ->addColumn('options', function ($data) {
                $action="<button type='button' title='Edit' class='btn edit btn-sm btn-success' data-toggle='modal' data-id='" . $data->id . "'><i class='fa fa-edit'></i></button>";
                $action.="<button type='button' title='Delete' class='btn delete btn-sm btn-danger' data-id='" . $data->id . "'><i class='fa fa-trash'></i></button>";
                return $action;
            })
            ->rawColumns(['options','value'])
            ->make(true);

    }
    public function edit(Request $request){
        $update=Settings::find($request->id);
        return response()->json($update);
    }
    public function store(Request $request){
        $this->validate(\request(),[
            'name' =>'required',
            'value' =>'required',
        ],[
            'name.required'=>'All fields are required * ',
            'value.required'=>'All fields are required * ',
        ]);
        if ($request->id==0){
            $data = new Settings();
            $message='Added successfully!';
            $data->page = $request->page;
            $slugify1 = new Slugify();
            $data->slug=$slugify1->slugify($request->name);
            $data->name = $request->name;
        }else{
            $data =Settings::find($request->id);
            $message='Updated successfully!';
        }
        if ($request->type=='on'){
            $attachment = time() . $request->value->getClientOriginalName();
            Storage::disk('local')->put('/public/settings/' . $attachment, File::get($request->value));
            $data->value = $attachment;
            $data->type='image';
        }else{
            $data->type='text';
            $data->value = $request->value;
        }
        $data->save();
        return response()->json(['success'=>$message]);
    }
}
