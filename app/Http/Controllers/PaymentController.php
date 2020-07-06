<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Cash;
use App\MonthlyReport;
use App\Property;
use App\Report;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('admin.payments',[
            'properties'=>$properties
        ]);
    }
    public function cashPayments(){
        $cashes = Cash::all();
        $tenants = User::where('role',2)->get();
        return view('admin.cashPayments',[
            'tenants'=>$tenants,
            'cashes'=>$cashes
        ]);
    }
    public function TenantPayments(){
       $cashes = Cash::where('house',auth()->user()->house->name)->orderByDesc('id')->get();
        return view('tenant.cashPayments',[
            'cashes'=>$cashes,
        ]);
    }
    public function store(Request $request){
        $cashPayment = Cash::create([
            'tenant_id'=>$request->input('tenant_id'),
            'property'=>$request->input('property'),
            'house'=>$request->input('house'),
            'houseType'=>$request->input('houseType'),
            'amount'=>$request->input('amount'),
        ]);
        $getBalance = MonthlyReport::where('tenant_id',$request->tenant_id)->first();

            $balance = $getBalance->balance;
            $totalBalance = $balance - $request->amount;
            $updateMonthlyReport = MonthlyReport::where('tenant_id',$request->tenant_id)->update(['balance'=>($totalBalance)]);

            $updatePaidTenant = MonthlyReport::where('balance','<=',0)->where('tenant_id',$request->tenant_id)->update(['status'=>0]);
            $updatePaidTenant1 = MonthlyReport::where('balance','>',0)->where('tenant_id',$request->tenant_id)->update(['status'=>1]);
        $updateMonthlyReport = MonthlyReport::where('tenant_id',$request->tenant_id)->update(['amount'=>($request->input('amount'))]);

        $getTenant = User::where('id',$request->tenant_id)->first();
        $report = Report::create([
            'name'=>$getTenant->name,
            'property'=>$request->input('property'),
            'house'=>$request->input('house'),
            'houseType'=>$request->input('houseType'),
            'amount'=>$request->input('amount'),
            'status' => 'paid'
        ]);


        return redirect()->back()->with('success','Payments Made Successfully');

    }
}
