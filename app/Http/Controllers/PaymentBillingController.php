<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class PaymentBillingController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('admin.paymentsBilling',[
            'properties'=>$properties
        ]);
    }
}
