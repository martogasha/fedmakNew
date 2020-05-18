<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyUnit;
use App\Test;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        return redirect()->back()->with('success','Tenant Registered Successfully');
    }
    public function deleteUser($id){
        $deleteUser = User::find($id);
        $deleteUser->delete();

        return redirect()->back()->with('success','Tenant Deleted Successfully');

    }
}
