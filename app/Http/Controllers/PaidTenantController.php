<?php

namespace App\Http\Controllers;

use App\MonthlyReport;
use Illuminate\Http\Request;

class PaidTenantController extends Controller
{
    public function index(){
        $paidTenants = MonthlyReport::where('status',0)->get();
        return view('admin.paidTenants',[
            'paidTenants'=>$paidTenants
        ]);
    }
}
