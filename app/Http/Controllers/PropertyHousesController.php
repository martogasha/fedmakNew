<?php

namespace App\Http\Controllers;

use App\PropertyUnit;
use App\PropertyUnitServiceBill;
use App\Test;
use App\User;
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
            'status'=>0
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
    public function edit($id){
        $edit = PropertyUnit::where('id',$id)->first();
        return view('admin.editHouse',[
            'edit'=>$edit
        ]);

    }
    public function update(Request $request, $id){
        $edit = PropertyUnit::find($id);
        $edit->name = $request->input('name');
        $edit->type = $request->input('type');

        $edit->save();
        return redirect()->back()->with('success','House Details Updated Successfully');
    }
    public function delete($id){
        $deleteHouse = PropertyUnit::find($id);
        $userHouse = User::where('house_id',$deleteHouse->id)->first();
        if ($userHouse){
            return redirect()->back()->with('error','House is Occupied');
        }
        else{
            $deleteHouse->delete();
            $deleteHouseServiceBill = PropertyUnitServiceBill::where('propertyUnit_id',$id)->delete();

            return redirect()->back()->with('success','House Successfully Removed');

        }
    }


}

