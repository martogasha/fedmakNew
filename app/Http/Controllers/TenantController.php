<?php

namespace App\Http\Controllers;

use App\MonthlyReport;
use App\Property;
use App\PropertyUnit;
use App\PropertyUnitServiceBill;
use App\Test;
use App\User;
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
            $house = PropertyUnitServiceBill::where('propertyUnit_id',$request->houseNo)->where('interval','monthly')->sum('amount');
            if ($house) {
                $output= $house;
            }
                return response($output);
        }
    }
    public function getEditDetails(Request $request){
        if ($request->ajax()){
            $output= "";
            $getPropertyId = Property::where('name',$request->property)->first();
            $houses = PropertyUnit::where('property_id',$getPropertyId->id)->get();

        }
        if ($houses){
            foreach ($houses as $house){
                $output.= '<option value='.$house->name.'>'.$house->name.'</option>';

            }
            return response($output);
        }
    }

    public function getEditHouse(Request $request){
        if ($request->ajax()){
            $output ="";
            $getHouseName = PropertyUnit::where('name',$request->house)->first();
            $getServiceBill = PropertyUnitServiceBill::where('propertyUnit_id',$getHouseName->id)->first();
        }
        $output = '
         <div class="form-group"><label for="">House Type</label><input
                                                    class="form-control" data-error="House Type is invalid"
                                                    placeholder='.$getHouseName->type.' name="houseType" required="required" type="text" value='.$getHouseName->type.'>
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
                                            <div class="form-group"><label for="">House Amount</label><input
                                                    class="form-control" data-error="Amount is invalid"
                                                    placeholder='.$getServiceBill->amount.' name="amount" required="required" type="text" value='.$getServiceBill->amount.'>
                                                <div class="help-block form-text with-errors form-control-feedback"></div>
                                            </div>
        ';

        return response($output);

    }



}

