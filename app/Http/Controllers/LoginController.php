<?php

namespace App\Http\Controllers;

use App\Http\Middleware\admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request)
    {

        if (Auth::attempt([
            'idno' => $request->idno,
            'password' => $request->password,

        ])) {
            $user = User::where('idno', $request->idno)->first();

            if ($user->role == 1) {
                return redirect()->route('admin');

            } elseif ($user->role == 2) {
                return redirect()->route('tenant');
            }
        } else {
            return redirect(url('/'))->with('error', 'CREDENTIALS DOES NOT MATCH');
        }
    }
}
