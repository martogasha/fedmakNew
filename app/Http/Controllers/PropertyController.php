<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('admin.property',[
            'properties'=>$properties
        ]);
    }

    public function store(Request $request){
        $property = Property::create([
            'name'=>$request->input('pName'),
            'location'=>$request->input('pLocation'),
            'lName'=>$request->input('lName'),
            'lPhone'=>$request->input('lPhone'),
            'lEmail'=>$request->input('lEmail'),
        ]);

        return redirect()->back()->with('success','Property Details added Successfully');
    }
    public function show($id){
        $property = Property::where('id',$id)->first();
        return view('admin.propertyDetail',[
            'property'=>$property
        ]);
    }
}
