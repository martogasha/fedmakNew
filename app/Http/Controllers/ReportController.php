<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index(){
        $reports = Report::all();
        return view('admin.report',[
            'reports'=>$reports
        ]);
    }
}
