<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyUnit;
use App\PropertyUnitServiceBill;
use App\Test;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    public function index(){
        return view('tenant.index');

    }
    public function getHouses(Request $request){
    if ($request->ajax()){
        $output = "";
        $price = "";
        $houses = PropertyUnit::where('property_id',$request->property)->where('status',0)->get();
        if ($houses){
            foreach ($houses as $house){
                $output.= '<option value='.$house->id.'>'.$house->name.'</option>';

            }
            return response($output);
        }
    }

    }
    public function getHouseDetails(Request $request){
        if ($request->ajax()){
            $output = "";
            $house = PropertyUnitServiceBill::where('propertyUnit_id',$request->houseNo)->sum('amount');
            if ($house) {
                $output= $house;
            }
                return response($output);
        }
    }



}

