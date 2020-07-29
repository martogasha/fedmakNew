<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        $tenant = User::where('id',Auth::id())->first();
        return view('tenant.profile',[
            'tenant'=>$tenant
        ]);
    }
    public function edit(Request $request){
        $edit = User::find($request->tenantId);
        $edit->idno = $request->idno;
        $edit->phone = $request->phone;
        $edit->password = Hash::make($request->password);
        $edit->save();
        return redirect()->back()->with('success','Tenant Details Updated Successfully');


    }
    public function editAdmin(Request $request, $id){
        $edit = User::find($id);
        $edit->idno = $request->idno;
        $edit->phone = $request->phone;
        $edit->password = Hash::make($request->password);
        $edit->save();
        return redirect()->back()->with('success','Admin Details Updated Successfully');



    }
}
