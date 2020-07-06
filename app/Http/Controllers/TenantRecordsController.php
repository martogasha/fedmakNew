<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Cash;
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
            $house = PropertyUnit::where('id',$request->houseNo)->first();
                $getServiceBillAmount = PropertyUnitServiceBill::where('propertyUnit_id', $house->id)->sum('amount');
                $user = User::where('idno',$request->idno)->first();

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
        else{
            $house = PropertyUnit::where('id',$request->houseNo)->first();
                $getServiceBillAmount = PropertyUnitServiceBill::where('propertyUnit_id', $house->id)->where('interval','monthly')->sum('amount');
            $user = User::where('idno',$request->idno)->first();


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

        $updatePropertyUnit = PropertyUnit::where('id',$request->houseNo)->update(['status'=>1]);
        return redirect()->back()->with('success','Tenant Registered Successfully');
    }
    public function edit($id){
        $edit = User::find($id);
        $properties = Property::all();
        $getProperty = User::where('id',$id)->first();
        $getHouse = PropertyUnit::where('property_id',$getProperty->property_id)->first();
        $getServiceBill = PropertyUnitServiceBill::where('propertyUnit_id',$getHouse->id)->first();
        return view('admin.editTenant',[
            'edit'=>$edit,
            'properties'=>$properties,
            'getHouse'=>$getHouse,
            'getServiceBill'=>$getServiceBill
        ]);

    }
    public function update(Request $request, $id){
        $edit = User::find($id);
        $getHouse = PropertyUnit::where('id',$edit->house_id)->first();
        if ($request->amount) {
            $serviceBill = PropertyUnitServiceBill::where('propertyUnit_id', $getHouse->id)->update(['amount' => $request->amount]);
        }
        else{
            $serviceBill = PropertyUnitServiceBill::where('propertyUnit_id',$getHouse->id)->update(['amount'=>$request->amount1]);

        }
        $getPropertyId = Property::where('name',$request->property)->first();
        $edit->name = $request->get('name');
        $edit->idno = $request->get('idno');
        $edit->phone = $request->get('phone');
        $edit->property_id = $getPropertyId->id;
        if ($request->amount) {
            $edit->amount = $request->get('amount');
        }
        else{
            $edit->amount = $request->get('amount1');

        }
        if ($request->houseType) {
            $edit->houseType = $request->get('houseType');
        }
        else{
            $edit->houseType = $request->get('houseType1');

        }

        $edit->save();
        return redirect()->back()->with('success','Tenant Details Edited Successfully');

    }
    public function deleteUser($id)
    {
        $deleteUser = User::find($id);
        $changePropertyUnitStatus = PropertyUnit::where('id', $deleteUser->house_id)->update(['status' => 0]);
        $deleteTenantBill = Bill::where('tenant_id', $id)->delete();
        $deleteCash = Cash::where('tenant_id',$id)->delete();
        $getBalance = MonthlyReport::where('tenant_id', $id)->first();

        if (isset($getBalance))
            switch ($getBalance) {
                case $getBalance->balance == 0:
                    $deleteMontlyReport = MonthlyReport::where('tenant_id', $id)->delete();
                    $deleteUser->delete();
                    return redirect()->back()->with('success','Tenant Deleted Successfully');
                    break;
                case $getBalance->balance > 0:
                    return redirect()->back()->with('error', 'Tenant Should Clear Balance of  first');
                    break;
                case $getBalance->balance<0:
                    return redirect()->back()->with('error','Tenant needs refund');
                break;


            }



    }
}
