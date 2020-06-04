<?php

namespace App\Http\Controllers;

use App\PropertyUnit;
use App\Test;
use Illuminate\Http\Request;

class PropertyHousesController extends Controller
{
    public function index(){
        $propertyUnits = PropertyUnit::all();
        return view('admin.propertyHouses',[
            'propertyUnits'=>$propertyUnits
        ]);
    }

    public function store(Request $request){
        $propertyHouse = PropertyUnit::create([
            'name'=>$request->input('houseNo'),
            'type'=>$request->input('type'),
            'property_id'=>$request->input('property_id'),
            'status'=> 0
        ]);

        return redirect(url('propertyUnits',$request->property_id))->with('success','PropertyHouse/Unit Created Successfully');
    }

    public function show($id){
        $pUnits = PropertyUnit::where('property_id',$id)->get();
        $propertyId = PropertyUnit::where('property_id',$id)->first();
        return view('admin.propertyHouses',[
            'pUnits'=>$pUnits,
            'propertyId'=>$propertyId
        ]);
    }


}

