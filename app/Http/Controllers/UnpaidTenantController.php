<?php

namespace App\Http\Controllers;

use App\Bill;
use App\MonthlyReport;
use Illuminate\Http\Request;

class unpaidTenantController extends Controller
{
    public function index(){
        $unpaidTenants = MonthlyReport::where('status',1)->get();
        return view('admin.unPaidTenants',[
            'unpaidTenants'=>$unpaidTenants
        ]);
    }
}
