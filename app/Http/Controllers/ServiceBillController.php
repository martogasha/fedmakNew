<?php

namespace App\Http\Controllers;

use App\ServiceBill;
use Illuminate\Http\Request;

class ServiceBillController extends Controller
{
    public function index(){
        $serviceBills = ServiceBill::all();
        return view('admin.serviceBill',[
            'serviceBills'=>$serviceBills
        ]);
    }
    public function store(Request $request){
        $serviceBill = ServiceBill::create([
           'name'=>$request->input('name')
        ]);
        return redirect()->back()->with('success','Service Bill added Successfully');
    }
}
