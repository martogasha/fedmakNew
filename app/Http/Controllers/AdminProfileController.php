<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class AdminProfileController extends Controller
{
    public function index(){
        if(Auth::user()->role ==1) {
                $tenant = User::where('id',Auth::id())->first();
                return view('admin.profile',[
                    'tenant'=>$tenant
                ]);
        }
        else{
            dd('Not Authorised');
        }

    }
}
