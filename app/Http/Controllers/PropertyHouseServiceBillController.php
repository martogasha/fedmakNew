<?php

namespace App\Http\Controllers;

use App\PropertyUnit;
use App\PropertyUnitServiceBill;
use App\ServiceBill;
use Illuminate\Http\Request;

class PropertyHouseServiceBillController extends Controller
{
    public function index(){
        return view('admin.propertyHouseServiceBill',[
        ]);
    }
    public function store(Request $request){
        $pServiceBill = PropertyUnitServiceBill::create([
           'service_id'=>$request->input('serviceBill_id'),
            'propertyUnit_id'=>$request->input('propertyUnit_id'),
            'interval'=>$request->input('interval'),
            'amount'=>$request->input('amount')

        ]);
        return redirect()->back()->with('success','Service Bill added Successfully');

    }
    public function show($id){
        $UServiceBills = PropertyUnitServiceBill::where('propertyUnit_id',$id)->get();
        $getPropertyUnit = PropertyUnit::where('id',$id)->first();
        $serviceBills = ServiceBill::all();
        return view('admin.propertyHouseServiceBill',[
            'UServiceBills'=>$UServiceBills,
            'getPropertyUnit'=>$getPropertyUnit,
            'serviceBills'=>$serviceBills
        ]);

    }
}
