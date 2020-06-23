<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function index(){
        if(Auth::user()->role ==1) {
            return view('admin.profile');
        }
        else{
            dd('Not Authorised');
        }
    }
}
