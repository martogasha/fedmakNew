<?php

namespace App\Http\Controllers;

use App\Http\Middleware\admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return redirect(route('admin'));
    }
    public function login(Request $request)
    {

    }
}
