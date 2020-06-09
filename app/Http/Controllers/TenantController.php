<?php

namespace App\Http\Controllers;

use App\MonthlyReport;
use App\Property;
use App\PropertyUnit;
use App\PropertyUnitServiceBill;
use App\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TenantController extends Controller
{
    public function index(){
        $bal = MonthlyReport::where('tenant_id',Auth::id())->first();
        return view('tenant.index',[
            'bal'=>$bal
        ]);

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

