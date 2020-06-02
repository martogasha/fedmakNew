<?php

namespace App\Http\Controllers;

use App\Bill;
use App\MonthlyReport;
use App\Property;
use App\PropertyUnit;
use App\PropertyUnitServiceBill;
use App\Test;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Psy\Command\WhereamiCommand;

class TenantRecordsController extends Controller
{

    public function index(){
        $properties = Property::all();
        $tenants = User::where('role',2)->get();
        return view('admin.tenants',[
            'properties'=>$properties,
            'tenants'=>$tenants

        ]);


    }
    public function store(Request $request){
        $houseType = PropertyUnit::where('id',$request->houseNo)->first();
        $tenantDetails = User::create([

            'name'=>$request->input('name'),
            'idno'=>$request->input('idno'),
            'phone'=>$request->input('phone'),
            'property_id'=>$request->input('property'),
            'house_id'=>$request->input('houseNo'),
            'houseType'=>$houseType->type,
            'amount'=>$request->input('amount'),
            'role'==2,
            'password'==Hash::make('123456'),
        ]);
        $users = User::where('role',2)->get();
        foreach ($users as $user) {
            $getServiceBillAmount = PropertyUnitServiceBill::where('propertyUnit_id', $user->house_id)->sum('amount');

            $billing = Bill::create([
                'tenant_id' => $user->id,
                'property' => $user->property->name,
                'house' => $user->house->name,
                'houseType' => $user->houseType,
                'amount' => $getServiceBillAmount,

            ]);
            $checkBill = MonthlyReport::where('tenant_id', $user->id)->first();
            if ($checkBill) {

                $getBalance = $checkBill->balance;
                $totalBalance = $getBalance + $getServiceBillAmount;
                $updateAmount = MonthlyReport::where('tenant_id', $user->id)->update(['balance' => ($totalBalance)]);

                $updatePaidTenant = MonthlyReport::where('balance', '<=', 0)->update(['status' => 0]);
                $updatePaidTenant1 = MonthlyReport::where('balance', '>', 0)->update(['status' => 1]);
            } else {
                $monthlyReport = MonthlyReport::create([
                    'tenant_id' => $user->id,
                    'property' => $user->property->name,
                    'house' => $user->house->name,
                    'houseType' => $user->houseType,
                    'amount' => $getServiceBillAmount,
                    'balance' => $getServiceBillAmount,
                    'status' => 1
                ]);
            }
        }
        $updatePropertyUnit = PropertyUnit::where('id',$request->houseNo)->update(['status'=>1]);
        return redirect()->back()->with('success','Tenant Registered Successfully');
    }
    public function deleteUser($id){
        $deleteUser = User::find($id);
        $changePropertyUnitStatus = PropertyUnit::where('id',$deleteUser->house_id)->update(['status'=>0]);
        $deleteUser->delete();
        ;

        return redirect()->back()->with('success','Tenant Deleted Successfully');

    }
}
