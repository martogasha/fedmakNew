<?php

namespace App\Http\Controllers;

use App\MonthlyReport;
use App\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        if (Auth::user()->role ==1) {

            $properties = Property::all();
            return view('admin.index', [
                'properties' => $properties
            ]);
        }
        else{
            dd('not Authorised');
        }
    }
}
