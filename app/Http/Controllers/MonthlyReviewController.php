<?php

namespace App\Http\Controllers;

use App\Property;
use App\PropertyUnit;
use Illuminate\Http\Request;

class MonthlyReviewController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('Partials.monthlyReview',[
            'properties'=>$properties
        ]);
    }
}
