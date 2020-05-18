<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonthlyReviewController extends Controller
{
    public function index(){
        return view('Partials.monthlyReview');
    }
}
