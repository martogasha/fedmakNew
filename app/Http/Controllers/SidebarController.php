<?php

namespace App\Http\Controllers;

use App\Property;
use Illuminate\Http\Request;

class SidebarController extends Controller
{
    public function index(){
        $properties = Property::all();
        return view('Partials.rightSidebar',[
            'properties'=>$properties
        ]);
    }
}
