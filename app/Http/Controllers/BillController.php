<?php

namespace App\Http\Controllers;

use App\Bill;
use App\MonthlyReport;
use App\User;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function index(){
        $bills = Bill::all();
        $tenants = User::where('role',2)->get();
        return view('admin.bill',[
            'bills'=>$bills,
            'tenants'=>$tenants
        ]);
    }
    public function getTenant(Request $request){
        if ($request->ajax()){
            $output="";
            $tenant = User::where('id',$request->tenant)->first();
        }
        $output='<div class="col-sm-6">
                            <div class="form-group"><label for="">Property</label>
                                <div class="form-group">
                                    <input class="form-control" id="getProperty" name="property" placeholder="Enter Property name..." value="'.$tenant->house->property->name.'">

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><label for="">House No</label>
                                <div class="form-group">
                                    <input class="form-control" name="house" placeholder="Enter House No..." value='.$tenant->house->name.'>

                                </div>
                            </div>
                        </div>
                           <div class="col-sm-6">
                            <div class="form-group"><label for="">House No</label>
                                <div class="form-group">
                                    <input class="form-control" name="houseType" placeholder="Enter House No..." value="'.$tenant->house->type.'">

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group"><label for="">House Price</label>
                                <div class="form-group">
                                    <input class="form-control" id="getHouseDetail" name="amount" placeholder="House Price..." value='.$tenant->amount.'>
                                </div>
                            </div>
                        </div>
                    </div>
';
        return response($output);
    }
    public function store(Request $request){
        $bill = Bill::create([
            'tenant_id'=>$request->input('tenant_id'),
            'property'=>$request->input('property'),
            'house'=>$request->input('house'),
            'houseType'=>$request->input('houseType'),
            'amount'=>$request->input('amount'),

        ]);
        $checkBill = MonthlyReport::where('tenant_id',$request->tenant_id)->first();
        if ($checkBill){

                $getBalance = $checkBill->balance;
                $totalBalance = $getBalance + $request->amount;
                $updateAmount = MonthlyReport::where('tenant_id',$request->tenant_id)->update(['balance'=>($totalBalance)]);

            $updatePaidTenant = MonthlyReport::where('balance','<=',0)->update(['status'=>0]);
            $updatePaidTenant1 = MonthlyReport::where('balance','>',0)->update(['status'=>1]);
            return redirect()->back()->with('success','Tenant Billed Successfully');
        }
        else{
            $monthlyReport = MonthlyReport::create([
                'tenant_id'=>$request->input('tenant_id'),
                'property'=>$request->input('property'),
                'house'=>$request->input('house'),
                'houseType'=>$request->input('houseType'),
                'amount'=>$request->input('amount'),
                'balance'=>$request->input('amount'),
                'status'=>1
            ]);
            return redirect()->back()->with('success','Tenant Billed Successfully');
        }

    }
    public function deleteBill($id){
        $deleteBill = Bill::find($id);
        $deleteBill->delete();
        return redirect()->back()->with('success','Bill Deleted Successfully');

    }
}
