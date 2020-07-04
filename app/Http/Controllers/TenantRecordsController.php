<?php

namespace App\Http\Controllers;

use App\Bill;
use App\MonthlyReport;
use App\Property;
use App\PropertyUnit;
use App\PropertyUnitServiceBill;
use App\Report;
use App\ServiceBill;
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
    public function editIndex(){
        return view('admin.editTenant');
    }
    public function store(Request $request){
        $houseType = PropertyUnit::where('id',$request->houseNo)->first();
        $serviceBill = PropertyUnitServiceBill::where('propertyUnit_id',$houseType->id)->where('interval','once')->first();
        $deposit = $serviceBill->amount;
        $amount = ($request->amount);
        $tenantDetails = User::create([

            'name'=>$request->input('name'),
            'idno'=>$request->input('idno'),
            'phone'=>$request->input('phone'),
            'property_id'=>$request->input('property'),
            'house_id'=>$request->input('houseNo'),
            'houseType'=>$houseType->type,
            'amount'=>$amount,
            'role'==2,
            'password'==Hash::make('123456'),
        ]);
        if ($request->deposit ==1){
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
                }
                else {
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
                $report = Report::create([
                    'name'=>$user->name,
                    'property' => $user->property->name,
                    'house' => $user->house->name,
                    'houseType' => $user->houseType,
                    'amount' => $getServiceBillAmount,
                    'status' => 1
                ]);
            }
        }
        else{
            $users = User::where('role',2)->get();
            foreach ($users as $user) {
                $getServiceBillAmount = PropertyUnitServiceBill::where('propertyUnit_id', $user->house_id)->where('interval','monthly')->sum('amount');

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
                }
                else {
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
                $report = Report::create([
                    'name'=>$user->name,
                    'property' => $user->property->name,
                    'house' => $user->house->name,
                    'houseType' => $user->houseType,
                    'amount' => $getServiceBillAmount,
                    'status' => 1
                ]);
            }
        }

        $updatePropertyUnit = PropertyUnit::where('id',$request->houseNo)->update(['status'=>1]);
        return redirect()->back()->with('success','Tenant Registered Successfully');
    }
    public function edit($id){
        $edit = User::find($id);
        $properties = Property::all();
        return view('admin.editTenant',[
            'edit'=>$edit,
            'properties'=>$properties
        ]);

    }
    public function update(Request $request, $id){
        $edit = User::find($id);
        $getPropertyId = Property::where('name',$request->property)->first();
        $edit->name = $request->get('name');
        $edit->idno = $request->get('idno');
        $edit->phone = $request->get('phone');
        $edit->property_id = $getPropertyId->id;
        $edit->amount = $request->get('amount');
        $edit->houseType = $request->get('houseType');

        $edit->save();
        return redirect()->back()->with('success','Tenant Details Edited Successfully');

    }
    public function deleteUser($id){
        $deleteUser = User::find($id);
        $changePropertyUnitStatus = PropertyUnit::where('id',$deleteUser->house_id)->update(['status'=>0]);
        $deleteTenantBill = Bill::where('tenant_id',$id)->delete();
        $getBalance = MonthlyReport::where('tenant_id',$id)->first();
        if ($getBalance->status ==0) {
            $deleteMontlyReport = MonthlyReport::where('tenant_id', $id)->delete();
        }
        else{
            return redirect()->back()->with('error','Tenant Should Clear Balance first');
        }
        $deleteUser->delete();
        ;

        return redirect()->back()->with('success','Tenant Deleted Successfully');

    }
}
