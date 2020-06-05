<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class ReportViewController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('admin.reportView',[
            'properties'=>$properties
        ]);
    }
}
